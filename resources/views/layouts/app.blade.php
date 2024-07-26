<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        @include('layouts.alert')
      <div class="flex">
        <div class ="w-56 h-screen sticky top-0 bg-gray-200 shadow ">
            <img src="https://th.bing.com/th/id/OIP.UFEKzDjRbqdbPLXZvqxnDQHaGB?rs=1&pid=ImgDetMain" alt="" class ="w-8/12 mx-auto mt-5
            bg-white p-2 rounded-lg shadow-lg">
            <div class="mt-5">
                <a href="{{route('dashboard')}}" class="block p-3 text-gray-700
                hover:bg-blue-300">Dashboard</a>
                <a href="{{route('category.index')}}" class="block p-3 text-gray-700
                hover:bg-blue-300">Category</a>
                <a href="{{route('products.index')}}"  class="block p-3 text-gray-700
                hover:bg-blue-300">Products</a>
                <a href="{{route('orders.index')}}" class="block p-3 text-gray-700
                hover:bg-blue-300">Order</a>
                <a href="{{route('brand.index')}}" class="block p-3 text-gray-700
                hover:bg-blue-300">Brands</a>
                <a href="" class="block p-3 text-gray-700
                hover:bg-blue-300">user</a>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" class="block w-full p-3 text-gray-700 hover:bg-gray-300 text-left">logout</button>

                </form>
                
              

            </div>
        </div>
        <div class="p-4 flex-1">
            <h1 class="text-2xl font-bold">@yield('title')</h1>
            <hr class="h-1" bg-blue-500>
            @yield('content')

        </div>
        
      </div>
    </body>
</html>
