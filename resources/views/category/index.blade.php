@extends('layouts.app')
@section('title')categories @endsection
@section('content')
<div class="text-right my-5">
    <a href="{{route('category.create')}}" class="bg-indigo-800 text-white py-3 px-5 rounded font-bold">Add Category</a>

</div>
<table class=" mt-5 w-full">
    <thead>
        
        <tr>

            <th class="border p-2 bg-blue-200">S.N  </th>
            <th class="border p-2 bg-blue-200">category   </th>
            <th class="border p-2 bg-blue-200">action  </th>

        </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr class="text-center bg-yellow-500">
            <td class="border p-2 ">{{$category->priority}}</td>
            <td class="border p-2 ">{{$category->name}}</td>
            <td class="border p-2 ">
                <a href="{{route('category.edit',$category->id)}}"class="bg-indigo-800 text-white py-1.5 px-3 rounded font-bold">edit</a>
                <a href="{{route('category.destroy',$category->id)}}"class="bg-red-800 text-white py-1.5 px-3 rounded font-bold" onclick="return confirm('are you sure to delete?')">delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>


</table>
@endsection