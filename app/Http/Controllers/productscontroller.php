<?php

namespace App\Http\Controllers;

use App\Models\brand;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class productscontroller extends Controller
{
    public function index()
    {
      $products=product::all();
      return view('products.index',compact('products'));

    }
  
    public function create()
    {
      
       $categories=category::orderBy('priority')->get();
       $brands=brand::all();
       return view('products.create',compact('categories','brands'));

    }
    public function store(Request $request)
    {
       $data= $request->validate([
        
        'name'=>'required|string',
        'price'=>'required',
        'stock'=>'required',
        'description'=>'required|string',
        'photopath'=>'required|image',
        'brand_id'=>'required',
        'category_id'=>'required',
         
       ]);
       $photoname=time().'.'.$request->photopath->extension();
       $request->photopath->move(public_path('image'),$photoname);
       $data['photopath']=$photoname;
       product::create($data);
       return redirect()->route('products.index')->with('success','product created sucecessfully');

    }
    public function edit($id)
    {
      $categories=category::orderBy('priority')->get();
      $brands=brand::all();
      $products=product::find($id);
      return view('products.edit',compact('products','categories','brands'));
    }

    public function update(Request $request,$id)
    {

      $data= $request->validate([
        
        'name'=>'required|string',
        'price'=>'required',
        'stock'=>'required',
        'description'=>'required|string',
        'brand_id'=>'required',
        'category_id'=>'required',
      ]);
      $products=product::find($id);
      if($request->hasFile('photopath'))
      {
      $photoname=time().'.'.$request->photopath->extension();
      $request->photopath->move(public_path('image'),$photoname);
      $data['photopath']=$photoname;

      //delete old photo
      $oldphoto=public_path('image').'/'.$products->photopath;
      if(file_exists($oldphoto))
      {
        unlink($oldphoto);
      }
      }
      $products->update($data);

      return redirect()->route('products.index')->with('success','product upadate  sucecessfully');
    
    }
    public function destroy($id)
  {
    $products = product::find($id);
    $photo=public_path('image').'/'.$products->photopath;
    if(file_exists($photo))
    {
      unlink($photo);
    }
    $products->delete();
    
    return redirect()->route('products.index')->with('success','product delete sucecessfully');
  }
  

    
    
}     