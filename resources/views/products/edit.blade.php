@extends('layouts.app')
@section('title') upadteproduct @endsection
@section('content')
<form action="{{route('products.update',$products->id)}}" method="post" class="md-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-5">
        <select name="category_id" class="p-3 w-full rounded-lg">
            @foreach($categories as $category)
            <option value="{{$category->id}}"
            @if($products->category_id==$category->id)
            selected
            @endif
            >{{$category->name}}</option>
            @endforeach

        </select>
    </div>

    <div class="mb-5">
        <select name="brand_id" class="p-3 w-full rounded-lg">
            @foreach($brands as $brand)
            <option value="{{$brand->id}}"
            @if($products->brand_id==$brand->id)
            selected
            @endif
            >{{$brand->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-5">
        <input type="text" placeholder="Enter product name" class="p-3 w-full rounded-lg" name="name" value="{{$products->name}}">
        @error('name')
        <div class="text-red-500 md-2 text-sm">
            *{{$message}}
        </div>
        @enderror
    </div>
    <div class="grid grid-cols-2 gap-10">
        <div class="mb-5">
            <input type="text" placeholder="Enter Product Price" class="p-3 w-full rounded-lg" name="price"
            value="{{$products->price}}">
            @error('price')
             <div class="text-red-700 mt-2 text-sm">
               * {{$message}}
             </div>
           @enderror
       </div>
       <div class="mb-5">
        <input type="text" placeholder="EnterProduct Stock" class="p-3 w-full rounded-lg" name="stock"
        value="{{$products->stock}}">
        @error('stock')
         <div class="text-red-700 mt-2 text-sm">
           * {{$message}}
         </div>
       @enderror
   </div>
</div>
   <div class="mb-5">
    <textarea name="description" rows="5" placeholder="Enter Product Description"
    class="p-3 w-full rounded-lg">{{$products->description}}</textarea>
    @error('description')
     <div class="text-red-700 mt-2 text-sm">
       * {{$message}}
     </div>
   @enderror
</div>
<div class="mb-5">
    <input type="file" placeholder="Enter Photo Path" class="p-3 w-full rounded-lg" name="photopath"
    value="{{$products->photopath}}">
    @error('photopath')
     <div class="text-red-700 mt-2 text-sm">
       * {{$message}}
     </div>
   @enderror
</div>
    <div class="flex justify-center">
        <button type="submit" class="bg-blue-400 text-white py-3 px-5 rounded font-bold">update product</button>
        <a href="{{ route('products.index')}}" class="bg-red-500 text-white py-3 px-5 rounded font-bold
         ml-3">Cencel</a>

    </div>
</form>
@endsection
