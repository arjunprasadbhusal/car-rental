<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class categorycontroller extends Controller
{
    public function index()

    {
      $categories=category::orderBy('priority')->get();
      //$categories=category::all();
       return view('category.index',compact('categories'));

    }
    public function create()
    {
       return view('category.create');

    }
    public function store(Request $request)
    {
       $data= $request->validate([
         'name'=>'required||string',
         'priority'=>'required||integer'
       ]);
       category::create($data);
       return redirect()->route('category.index')->with('success','category created sucecessfully');

    }
    public function edit($id)
    {
      $category=category::find($id);
      return view('category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {

      $data= $request->validate([
        'name'=>'required||string',
        'priority'=>'required||integer'
      ]);
      $category=category::find($id);
      $category->update($data);

      return redirect()->route('category.index')->with('success','category upadate  sucecessfully');
    
    }
    public function destroy($id)
  {
    category::find($id)->delete();
    return redirect()->route('category.index')->with('success','category delete sucecessfully');
  }

    
}                                       
