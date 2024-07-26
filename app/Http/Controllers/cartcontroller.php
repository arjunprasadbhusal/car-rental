<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    public function store(Request $request)
    {
        $data=$request->validate([
            'product_id'=>'required',
            'quantity'=>'required|integer'
        ]);
        $data['user_id']=auth()->user()->id;
        $check=cart::where('user_id',$data['user_id'])->where
        ('product_id',$data['product_id'])->count();
        if($check>0){
            return back()->with('error','product already in cart');
        }
        cart::create($data);
        return back()->with('success','product added to cart successfully');
    }
    public function mycart()
    {
        $carts=Cart::where('user_id',auth()->user()->id)->get();
        return view('cart',compact('carts'));
    }
    public function destroy(Request $request)
    {
        Cart::find($request->dataid)->delete();
        return back()->with('success','product remove from cart successfully');
    }
    public function checkout($id)
    {
        $cart=Cart::find($id);
        if($cart->user_id!=auth()->user()->id){
            return back()->with('error','unauthorized user');

        }
        return view('checkout',compact('cart'));
    }
}
