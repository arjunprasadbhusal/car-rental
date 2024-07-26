@extends('layouts.app')
@section('title')Editbrand @endsection
@section('content')
<form action="{{route('brand.update',$brand->id)}}" method="post" class="md-5">
    @csrf
    <div class="mb-5">
        <input type="text" placeholder="Enter brand name" class="p-3 w-full rounded-lg" name="name" value="{{$brand->name}}">
   
        @error('name')
        <div class="text-red-500 md-2 text-sm">
            *{{$message}}
        </div>
        @enderror
    </div>
 

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-400 text-white py-3 px-5 rounded font-bold">update brand</button>
        <a href="{{ route('brand.index')}}" class="bg-red-500 text-white py-3 px-5 rounded font-bold
         ml-3">Cencel</a>

    </div>
</form>
@endsection