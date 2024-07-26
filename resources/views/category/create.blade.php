@extends('layouts.app')
@section('title')CreateCategory @endsection
@section('content')
<form action="{{route('category.store')}}" method="post" class="md-5">
    @csrf
    <div class="mb-5">
        <input type="text" placeholder="Enter priority" class="p-3 w-full rounded-lg" name="priority" value="{{old('priority')}}">
        @error('priority')
            <div class="text-red-500 md-2 text-sm">
                *{{$message}}
            </div>
        @enderror
    </div>
    <div class="mb-5">
        <input type="text" placeholder="Enter Category name" class="p-3 w-full rounded-lg" name="name" value="{{old('name')}}">
   
        @error('name')
        <div class="text-red-500 md-2 text-sm">
            *{{$message}}
        </div>
        @enderror
    </div>
 

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-400 text-white py-3 px-5 rounded font-bold">Add Category</button>
        <a href="{{ route('category.index')}}" class="bg-red-500 text-white py-3 px-5 rounded font-bold
         ml-3">Cencel</a>

    </div>
</form>
@endsection
