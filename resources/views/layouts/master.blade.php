<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>
    @include('layouts.alert')
    <div class="flex justify-between px-20 bg-blue-500 text-white" >
        <div>
            <a href=""><i class="ri-phone-fill"></i>2345678976</a>
        </div>
        <div>
        @auth 
    
        <a href="">Hii, {{auth()->user()->name}}</a>
        <a href="{{route('mycart')}}" class="p-2">my Cart</a>

        <form action="{{route('logout')}}" method="post" class="inline">
        @csrf 
        <button type="submit " class="p-2">logout</button>
        </form>
         @else
        <a href="/login" class="p-2"> Login </a> 
         @endauth
        </div>
    </div>
   
    <nav class="flex justify-between items-center px-20 py-5 shadow-md sticky top-0 bg-white ">
    <div>
         <img src="{{asset('OIP (1).jpg')}}"  alt="" class="h-16">
    </div>
    <div>
     <a href="{{route('home')}}" class="p-2"> Home </a> 
     @php
      $categories=App\Models\category::orderby('priority')->get();
      @endphp
      @foreach($categories as $category)
      <a href="{{route('categoryproduct',$category->id)}}"class="p-2">{{$category->name}}</a>
      @endforeach
    </div>
</nav>
   @yield('content')
    <footer>
        <div class = "grid grid-cols-4 px-20 gap-10 bg-lime-400 py-10">
            <div>
            
                <h2 class = "text-2l font-bold">LOGO</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae sequi a 
                    dignissimos dolorum excepturi ut, quaerat qui in soluta officiis perspiciatis, quos inventore necessitatibus sed. 
                    Ad iste cupiditate rerum!</p>
            </div>
        <div>
    <h2 class = "text-2xl font-bold"> Quick Links </h2>
    <ul>
      <li><a href="/" class="p-2"> Home </a> 
      <li><a href="" class="p-2"> Login </a> 
</ul>
</div>
<div>
    <h2 class = "text-2xl font-bold"> Contact Us </h2>
    <p> Email : test@gmail.com<br> Phone: 9742538007</p>
    <p> Adresss: 123, <br>
        Chitwan <br>
        Nepal
</p>
</div>
    <div>
        <h2 class = "text-2xl font-bold">Social Links</h2>
        <ul>
        <li><a href="" > Facebook </a> </li>
        <li><a href=""> Twitter </a> </li>
        <li><a href=""> Instagram </a> </li>
        <li><a href=""> LinkedIn </a> </li>
       </ul>
    </div>
</div>
        <div class = "bg-blue-500 text-white text-center py-5">
            <p> &copy; 2021 All rights reserved </p>
        </div>
</footer>
</body>
</html>