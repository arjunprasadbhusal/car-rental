@extends('layouts.app')
@section('title') Dashboard
@endsection
@section('content')
<div class="grid grid-cols-3 gap-10 p-4">
<div class=" px-5 py-8 bg-red-500 text-white flex justify-between items-center rounded-lg
hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">total user</h2>
        <p class="text-3xl font-bold">100</p>

    </div>
    <div class=" px-5 py-8 bg-blue-500 text-white flex justify-between items-center rounded-lg
     hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">total categories </h2>
        <p class="text-3xl font-bold">{{$totalcategories}}</p>

    </div>
    <div class=" px-5 py-8 bg-red-500 text-white flex justify-between items-center rounded-lg
    hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">total products</h2>
        <p class="text-3xl font-bold">{{$totalproduct}}</p>

    </div>
    <div class=" px-5 py-8 bg-pink-500 text-white flex justify-between items-center rounded-lg
    hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">total order</h2>
        <p class="text-3xl font-bold">100</p>

    </div>
    <div class=" px-5 py-8 bg-red-500 text-white flex justify-between items-center rounded-lg
  hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">pending order</h2>
        <p class="text-3xl font-bold">100</p>

    </div>
    <div class=" px-5 py-8 bg-purple-500 text-white flex justify-between items-center rounded-lg
    hover:shadow-lg transform hover:scale-105 transition duration-300">
        <h2 class="text-2xl font-bold">total sales</h2>
        <p class="text-3xl font-bold">100</p>

    </div>
</div>

@endsection