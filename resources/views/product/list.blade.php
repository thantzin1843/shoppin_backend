@extends('master')

@section('content')

<div class="flex justify-between m-5">
        <div>
        <button class="bg-black text-orange-400 p-2 rounded-md"><a href="{{route('product.createProduct')}}">+ New Product</a></button>
        </div>
        <form action="">
            <input type="text" name="" class="p-2" id=""><button class="bg-black text-orange-400 p-2">Search</button>
        </form>
    </div>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
            <th scope="col" class="px-6 py-3">
                    #Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Product name
                </th>

                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Operations
                </th>
            </tr>
        </thead>
        <tbody>
           @foreach($products as $p)
           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$p->id}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$p->name}}
                </th>
                <td class="px-6 py-4">
                    {{$p->category->name}}
                </td>
                <td class="px-6 py-4">
                {{$p->current_price}}
                </td>
              
                <td class="px-6 py-4">
                    <i class="fa-solid me-5 text-xl  fa-eraser text-red-600 hover:scale-110"></i>
                    
                    <a href="{{route('product.detail',$p)}}"  data-modal-target="default-modal" data-modal-toggle="default-modal" class="text-black" >
                        <i class="fa-solid me-5 text-xl  fa-eye hover:scale-110"></i>
                    </a>
                    
                </td>
            </tr>
           @endforeach

           
            <!-- ----------------------------Modal------------------------------- -->



   
        
        </tbody>
    </table>
</div>


@endsection