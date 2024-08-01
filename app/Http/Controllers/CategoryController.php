<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function createPage(){
        return view('category.createPage');
    }

    public function create(Request $request){
        $request->validate([
            'categoryName' => 'required|unique:categories,name',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:20480',
        ]);

        $imagePath = null;
        if ($request->hasFile('img')) {
            $imagePath = $request->file('img')->store('category_images', 'public');
        }
  
        Category::create([
            'name' => $request->categoryName,
            'img' => $imagePath,
        ]);

        return redirect()->route('category.list')->with('success', 'Category created successfully.');
    }

    public function list(){
        $categories = Category::all();
        return view('category.list')->with(['categories'=>$categories]);
    }
}
