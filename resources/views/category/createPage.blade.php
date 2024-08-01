@extends('../master')

@section('content')
<div class="flex flex-col items-center justify-center">
    <form class="w-1/2 border mt-[50px] p-5 rounded-md shadow-md" action="{{route('category.create')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="text-3xl font-bold mb-5">Create New Category</div>
    <div class="mt-3 text-sm mb-2">Category Name</div>
    <input type="text" class="w-full" id="categoryName" name="categoryName" required>
    <div class="mt-3 text-sm mb-2">Category Image</div>
    <input type="file" class="w-full border border-black" name="img" required>
    <input type="submit" class="bg-orange-500 px-7 rounded-md py-2 mt-5 w-full" value="Create">
</form>
</div>
@endsection