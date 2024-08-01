@extends('master')


@section('content')

            <div class="p-4 md:p-5 space-y-4">
                <div>Name &nbsp;  <span class="text-sm bg-black text-orange-400 py-1 px-3 rounded-md ms-5">{{$product->name}}</span></div>
                <hr>
                <div>Category &nbsp;  <span class="text-sm bg-black text-purple-400 py-1 px-3 rounded-md ms-5">{{$product->category->name}}</span></div>
                <hr>
                <div>Current Price &nbsp;  <span class="text-sm bg-black text-white py-1 px-3 rounded-md ms-5">{{$product->current_price}}</span></div>
                <hr>
                <div class="">
                <div>Description </div>
                <div class="text-sm rounded-md bg-gray-100 p-2 ">&nbsp;{{$product->description}}</div>
                </div>
                
                <hr>
                <div class="">
                <div>Product Info  </div>
                <div class="text-sm  bg-gray-100 p-2 rounded-md">&nbsp;{!!$product->product_info!!}</div>
                </div>
                <hr>
                <div class="">
                    <div>
                        Details 
                    </div>
                    <div>
                        @foreach($product->details as $d)
                        <div class=" border-b p-2">{{$d->color}} - {{$d->size}} - {{$d->quantity}} - <i class="fa-solid me-5 text-xl  fa-eraser text-red-600 hover:scale-110"></i><i class="fa-solid me-5 text-xl  fa-edit text-black hover:scale-110"></i></div>
                       @endforeach
                    </div>
                </div>
                <hr>
                
                <div class="">
                <div>Product Images  </div>
                <div class="text-sm rounded-md bg-gray-100 p-2 flex flex-wrap gap-3">
                @foreach($product->images as $i)
                    <img src="{{asset('storage/'.$i->image)}}" class="w-[100px] h-[100px] "/>
                @endforeach
                    
                    

                </div>
                </div>
                <hr>

            </div>

               
       
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <a href="" class="py-2 px-5 rounded-md bg-black text-orange-500 "><i class="fa-solid me-5 text-xl  fa-edit text-orange-600 hover:scale-110"></i>Edit Info</a>

            </div>


@endsection