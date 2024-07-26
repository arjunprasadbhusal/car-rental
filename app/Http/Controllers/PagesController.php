<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $products=product::latest()->get();
      return view('welcome',compact('products'));
    }
    public function about()
    {
      return view('about');
    }
    public function contact()
    {
      return view('contact');
    }
    public function categoryproduct($id)
    {
      $category=category::find($id);
      $products=product::where('category_id',$id)->get();
      return view('categoryproduct',compact('products','category'));
    }
    public function viewproduct($id)
    {
      $product=product::find($id);
      $relatedproducts=product::where('category_id',$product->category_id)->where('id','!=',$id)->limit(4)->get();
      return view('viewproduct',compact('product','relatedproducts'));

    }
}