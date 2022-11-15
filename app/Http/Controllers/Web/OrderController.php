<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function __construct(

    )
    {
    }

    public function cart(){
        return view('cart');
    }
    public function order(){
        return view('order');
    }
    public function preorder(){
        return view('preorder');
    }
}
