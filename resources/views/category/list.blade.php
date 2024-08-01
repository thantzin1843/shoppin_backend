@extends('master')


@section('content')

<div class="w-full">
    <div class="flex justify-between m-5">
        <div>
        <button class="bg-black text-orange-400 p-2 rounded-md"><a href="{{route('category.createPage')}}">+ New Category</a></button>
        </div>
        <form action="">
            <input type="text" name="" class="p-2" id=""><button class="bg-black text-orange-400 p-2">Search</button>
        </form>
    </div>
    <table class="w-full mx-5">
        <tr class=""><th class="text-left pb-7">#No</th>
        <th class="text-left pb-7">Name</th>
        <th class="text-left pb-7">Image</th>
        <th class="text-left pb-7">Operations</th></tr>

        @foreach($categories as $c)
        <tr class="border-b">
            <td class="">{{$c->id}}</td>
            <td class="">{{$c->name}}</td>
            <td class="py-3"><img src="{{asset('storage/'.$c->img)}}" style="width:50px;height:50px"/></td>
            <td class="">
            <i class="fa-solid me-5 text-xl  fa-eraser text-red-600 hover:scale-110"></i>
            <i class="fa-solid  me-5 text-xl fa-edit  hover:scale-110"></i>
            </td>
        </tr>
        @endforeach
        
        
    </table>
</div>

@endsection


