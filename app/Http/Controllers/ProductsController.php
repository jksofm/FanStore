<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ImagesGallery;
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

    public function loadsingleproduct($id)
    {
        $data = [
            'product' => Product::find($id),
            'imagesGallery' => ImagesGallery::where('productID', $id)->get(),
            'category' => Category::get(),
            'reviews' => Review::where('productID', $id)->get(),

        ];
        return view("singleproduct/index")->with($data);
    }

    public function createreview(Request $request, $productId)
    {
        $data = $request->post();
        $data['productID'] = $productId;
        Review::create($data);
        $data = [
            'product' => Product::find($productId),
            'reviews' => Review::where('productID', $productId)->get(),
        ];
        return view("singleproduct/index")->with($data);
    }
}
