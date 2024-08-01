@extends('../master')

@section('content')
<div class="flex flex-col items-center justify-center">
    <!-- Prodgress -->
     
<div class="">
<ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
    <li class="flex items-center text-blue-600 dark:text-blue-500">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
            1
        </span>
         Product <span class="hidden sm:inline-flex sm:ms-2">General Info</span>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
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

<!--  -------------------------------------------------------- -->
    <form class="w-1/2 border mt-[50px] p-5 rounded-md shadow-md" action="{{route('product.create')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="text-3xl font-bold mb-5">Create New Product</div>
    <div class="mt-3 text-sm mb-2">Product Name</div>
    <input type="text" class="w-full" name="name" required>
    <div class="mt-3 text-sm mb-2">Category</div>
    <select name="category" id="" class="w-full p-2 ">
    <option value="">Choose Category</option>
        @foreach($categories as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
    </select>

    <div class="mt-3 text-sm mb-2">Product Description</div>
    <textarea type="text" class="w-full" name="description" required>
    </textarea>

    <div class="mt-3 text-sm mb-2">Product Price</div>
    <input type="number" class="w-full" id="" name="price" required>

    <div class="mt-3 text-sm mb-2">Product Info</div>
    <textarea class="w-full" id="product_info"  name="product_info">

    </textarea>
    <input type="submit" class="bg-orange-500 px-7 rounded-md py-2 mt-5 w-full" value="Next">
</form>

<script>
        ClassicEditor
            .create( document.querySelector( '#product_info' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

</div>
@endsection


