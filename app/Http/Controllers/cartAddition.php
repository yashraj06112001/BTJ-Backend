<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartAddition extends Controller
{
    //
    public function cartAdding(Request $request)
    {
     $name=$request->name;
     $qty=$request->quantity;
     $price=$request->price;
     $totalPrice=$price*$qty;
     if($totalPrice)
     {
        
     }   
    }
}
