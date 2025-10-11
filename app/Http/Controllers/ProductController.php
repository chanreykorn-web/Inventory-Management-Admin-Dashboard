<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //index
    public function productlist (){
        return view('Product.ProductList');
    }
}
