<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//add model
use App\Models\Delivery;

class DeliveryController extends Controller

//add function to call
{
    public function index()
    {
        //take data from delivery
     $data = Delivery::get(); 
     //return $data;  
     //calling view file
     return view('delivery-menu',compact('data'));
    }
    
}
