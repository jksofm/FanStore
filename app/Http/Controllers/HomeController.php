<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $data = [
            'products' => Product::take(8)->get()
        ];
        return view('home/index')->with($data);
    }
    public function aboutus()
    {
        return view("aboutus/index");
    }
    public function contact()
    {
        return view("contact/index");
    }
    // public function getFeaturedProducts()
    // {

    // }
}
