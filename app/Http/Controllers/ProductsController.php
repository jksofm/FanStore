<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
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

    public function loadsingleproduct($productid)
           
    {  
        $data = [
        'product' => Product::find($productid),
        'reviews' => Review::where('productID',$productid)->get(),
    ];
        return view("singleproduct/index")->with($data);
    }



    // public function getAllProducts()
    // {
    //     $data = [
    //         'products' => Product::get()
    //     ];
    //     return view('products/index')->with($data);
    // }

    public function createreview(Request $request,$productId)
    
    {  
        $data = $request->post();
        $data['productID'] = $productId;
        Review::create($data);
        $data = [
            'product' => Product::find($productId),
            'reviews' => Review::where('productID',$productId)->get(),
        ];
       
        return view("singleproduct/index")->with($data);
    }



}
