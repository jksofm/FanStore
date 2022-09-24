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
            'category' => Category::get(),

            'imagesGallery' => ImagesGallery::where('productID', $productId)->get(),
        ];
        return view("singleproduct/index")->with($data);
    }

    public function getProductQuickView(Request $request)
    {
        $productName = $request->get('productName');
        $productPrice = $request->get('productPrice');
        $productPhoto = $request->get('productPhoto');
        $productColor = $request->get('productColor');
        return response()->json([
            "productName" => $productName,
            "productPrice" => "$" . $productPrice,
            "productPhoto" => "http://localhost:8000/user/images/fans/" . $productPhoto . "",
            "productColor" => $productColor,
        ]);
    }
}
