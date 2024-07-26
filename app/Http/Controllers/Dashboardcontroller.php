<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function dashboard( )
    {
        $totalproduct=product::count();
        $totalcategories=category::count();
        return view('dashboard',compact('totalproduct','totalcategories'));

    }
}
