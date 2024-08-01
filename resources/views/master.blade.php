<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
   
    <style>
        a{
            cursor:pointer;
        }
        .rightMenuContainer{
            justify-content: end;
        }
        .resMenu{
            display: none;
        }
        @media(max-width:768px){
            .sidebar{
                display:none;
            }
            .rightbar{
                width: 100% !important;
            }
            .resMenu{
                display:block;
            }
            .rightMenuContainer{
            justify-content: space-between;
        }
        }

        #img{
            display: none;
        }
        #img-label{
            width: full;
        }
    </style>
 @livewireStyles
</head>
<body>
    <div class="w-full flex ">
        <div class="w-1/5 min-h-lvh bg-orange-300 sidebar">
            <div class="text-black text-3xl font-bold p-3 text-center border-b  ">Shoppin</div>
            <div class="">
                <div class="text-md text-center bg-black text-white py-3 my-2"><a href="{{route('home')}}"><i class="fa-solid fa-gauge me-3"></i>Dashboard</a></div>
                <div class="text-md text-center  py-3 my-2"><a href="{{route('category.list')}}"><i class="fa-solid fa-list  me-3 "></i>Category</a></div>
                <div class="text-md text-center  py-3 my-2"><a href="{{route('product.list')}}"><i class="fa-brands fa-product-hunt me-3 "></i>Products</a></div>
            </div>
        </div>
        <div class="w-4/5 rightbar">
        <div class="h-[70px] bg-orange-400 flex rightMenuContainer items-center">
            <!-- responsvie menu -->


<!-- drawer init and show -->
<div class="text-center resMenu">
   <button class="text-white p-2 mx-3 rounded-md" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" aria-controls="drawer-contact">
   <i class="fa-solid fa-bars text-xl hover:scale-110"></i>
   </button>
</div>

<!-- drawer component -->
<div id="drawer-contact" class="fixed top-0 left-0 z-40 h-screen overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-contact-label">
  
<div class=" bg-orange-300 h-full">
            <div class="text-black text-3xl font-bold p-3 text-center border-b">Shoppin</div>
            <div class="">
                <div class="text-md text-center bg-black text-white py-3 my-2"><a href="{{route('home')}}"><i class="fa-solid fa-gauge me-3"></i>Dashboard</a></div>
                <div class="text-md text-center  py-3 my-2"><a href="{{route('category.list')}}"><i class="fa-solid fa-list  me-3 "></i>Category</a></div>
                <div class="text-md text-center  py-3 my-2"><a href="{{route('product.list')}}"><i class="fa-brands fa-product-hunt me-3 "></i>Products</a></div>
            </div>
        </div>
  
</div>


            <!--  -->
            <div class="me-10 ">
                
                <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                </button>

                <!-- Dropdown menu -->
                <div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                    <div>Bonnie Green</div>
                    <div class="font-medium truncate">name@flowbite.com</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    </ul>
                    <div class="py-2">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                    </div>
                </div>

            </div>
        </div>
        <div>
           @yield('content')
        </div>
        </div>
    </div>

 

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    @livewireScripts
</body>
</html>