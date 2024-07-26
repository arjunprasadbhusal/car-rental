<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class brandcontroller extends Controller
{
    public function index()
    {
        $brands=brand::all();
        return view('brand.index',compact('brands'));
    }
    public function create()
    {
         return view('brand.create');
    }
    public function store(Request $request)
    {
        $data= $request->validate([
            'name'=>'required||required',
            
          ]);
          brand::create($data);
          return redirect()->route('brand.index')->with('success','brand created sucecessfully');
   
    }
    public function edit($id)
    {
        $brand=brand::find($id);
        return view('brand.edit',compact('brand'));
    }
    public function update(Request $request, $id)
    {
        $data= $request->validate([
            'name'=>'required||string',
    
          ]);
          $brand=brand::find($id);
          $brand->update($data);
    
          return redirect()->route('brand.index')->with('success','brand upadate  sucecessfully');
        
    }
    public function destroy($id)
    {
        brand::find($id)->delete();
        return redirect()->route('brand.index')->with('success','brand delete sucecessfully');
    }
}
