<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\ProductDetail;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function list(){
        $products = Product::with(['details', 'images','category'])->get();
        // dd($products->toArray());
        return view('product.list',compact('products'));
    }

    public function createProduct(){
        $categories = Category::all();
        // dd($categories);
        return view('product.create',compact('categories'));
    }

    public function createProductDetail(){
        return view('product.createDetail');
    }

    public function create(ProductRequest $request){
       $validatedData = $request->validated();
        $product = new Product();
        $product->name = $validatedData['name'];
        $product->category_id = $validatedData['category'];
        $product->current_price = $validatedData['price'];
        $product->updated_price = $validatedData['price'];
        $product->description= $validatedData['description'];
        $product->product_info = $validatedData['product_info'];
        $product->save();
        return view('product.createDetail',compact('product'));

    }

    public function createDetail(Product $product,Request $request){
        Validator::make($request->all(),[
            'color'=>'required',
            'size'=>'required',
            'quantity'=>'required',
        ])->validate();
        // dd($request->size,$product->toArray());
        $productDetail = new ProductDetail();
        $productDetail->size = $request->size;
        $productDetail->color = $request->color;
        $productDetail->quantity = $request->quantity;
        $productDetail->product_id = $product['id'];
        $productDetail->save();

        return view('product.createDetail',compact('product'));

    }

    public function createProductImagePage($productId){
        return view('product.createImage',compact('productId'));
    }

    public function createProductImages($id,Request $request){
        // dd($id,$request->file('images'));
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $images = $request->file('images');
        
        foreach ($images as $image) {
            $path = $image->store('images', 'public');
            ProductImage::create([
                'product_id'=>$id,
                'image' => $path
            ]);
        }

        return back()->with('success', 'Images uploaded successfully!');

    }

    public function detail(Product $product){
        return view('product.detail',compact('product'));
    }
}
