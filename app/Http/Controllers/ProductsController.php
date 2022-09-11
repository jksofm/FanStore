<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function loadproducts()
    {
        $data = [
            'products' => Product::get()
        ];
        return view('products/index')->with($data);
    }

    public function loadsingleproduct()
    {
        return view("singleproduct/index");
    }

    // public function getAllProducts()
    // {
    //     $data = [
    //         'products' => Product::get()
    //     ];
    //     return view('products/index')->with($data);
    // }



}
