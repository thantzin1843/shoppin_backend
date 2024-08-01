@extends('../master')

@section('content')
<div class="flex flex-col items-center justify-center">
<div class="">
<ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
    <li class="flex items-center  dark:text-blue-500">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border  rounded-full shrink-0 dark:border-blue-500">
            1
        </span>
         Product <span class="hidden sm:inline-flex sm:ms-2">General Info</span>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center text-blue-600">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
         Detail <span class="hidden sm:inline-flex sm:ms-2">Info</span>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        Product Images
    </li>
</ol>
</div>

    <form class="w-1/2 border mt-[50px] p-5 rounded-md shadow-md" action="{{route('product.createDetail',$product)}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="text-3xl font-bold mb-5">Create Product Detail</div>
    <div class="mt-3 text-sm mb-2">Product Name</div>
    <select name="productId" id="" class="w-full p-2">
        <option value="{{$product['id']}}">{{$product['name']}}</option>
    </select>
    <div class="mt-3 text-sm mb-2">Product Color</div>
    <input type="text" class="w-full" id="categoryName" name="color" required>
    <div class="mt-3 text-sm mb-2">Size</div>
    <select name="size" id="" class="w-full p-2 ">
    <option value="">Choose Size</option>
        <option value="Small">Small</option>
        <option value="Medium">Medium</option>
        <option value="Large">Large</option>
    </select>

    <div class="mt-3 text-sm mb-2">Available Quantity</div>
    <input type="number" class="w-full" id="categoryName" name="quantity" required>


   <input type="submit" class="bg-orange-500 px-7 rounded-md py-2 mt-5 w-full" value="Create">
   
   <div class="border border-gray-500 bg-gray-300 shadow-lg rounded-lg p-5 mt-3 ">
   <p class="text-sm "># After finish creating product details, then click button below to create product's images.</p>
   <div class="w-full mt-3">
        <a href="{{route('product.createProductImagePage',$product['id'])}}" class="bg-orange-500 text-center px-7 block rounded-md py-2 w-full">Create Product's Images</a>
   </div>
   </div>
  
</form>
</div>
@endsection