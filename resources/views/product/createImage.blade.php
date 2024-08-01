@extends('../master')

@section('content')
<div class="flex flex-col items-center justify-center">
<div class="">
<ol class="flex items-center w-full p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-sm dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
    <li class="flex items-center  dark:text-blue-500">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border rounded-full shrink-0 dark:border-blue-500">
            1
        </span>
         Product <span class="hidden sm:inline-flex sm:ms-2">General Info</span>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center ">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
            2
        </span>
         Detail <span class="hidden sm:inline-flex sm:ms-2">Info</span>
        <svg class="w-3 h-3 ms-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
        </svg>
    </li>
    <li class="flex items-center text-blue-600">
        <span class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600  rounded-full shrink-0 dark:border-gray-400">
            3
        </span>
        Product Images
    </li>
</ol>
</div>

<div id="preview" class="flex flex-wrap gap-5"></div>

    <form class="w-1/2 border mt-[50px] p-5 rounded-md shadow-md" action="{{route('product.createProductImage',$productId)}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="text-3xl font-bold mb-5">Create Product Images</div>
   
    <label class="mt-3 text-sm mb-2 p-5 border rounded-lg bg-gray-200 text-orange-500 flex justify-center items-center" for="img" id="img-label">
    <span class="me-5 text-md ">+ Upload Images</span> <i class="fa-solid fa-image text-3xl"></i>
    </label>
    <input type="file" class="w-full" id="img" name="images[]" onchange="previewImages()" required multiple >
    <input type="submit" class="bg-orange-500 px-7 rounded-md py-2 mt-5 w-full" value="Create">
</form>
</div>

<script>
        function previewImages() {
            var preview = document.getElementById('preview');
            preview.innerHTML = '';
            var files = document.querySelector('input[type=file]').files;

            function readAndPreview(file) {
                if (/\.(jpe?g|png|gif|svg)$/i.test(file.name)) {
                    var reader = new FileReader();

                    reader.addEventListener("load", function () {
                        var image = new Image();
                        image.height = 200;
                        image.width = 200;
                        image.title = file.name;
                        image.src = this.result;
                        preview.appendChild(image);
                    }, false);

                    reader.readAsDataURL(file);
                }
            }

            if (files) {
                [].forEach.call(files, readAndPreview);
            }
        }
</script>

@endsection