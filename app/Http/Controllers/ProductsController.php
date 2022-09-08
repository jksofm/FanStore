<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function loadproducts()
    {
     return view("products/index");
    }

    public function loadsingleproduct()
    {
     return view("singleproduct/index");
    }

  

}
