<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class FilterController extends Controller
{
  

    function getsearchajax(Request $request)
    {
       
            $query = $request->get('query');
            return response()->json([
                'products' => Product::where('name', 'LIKE', '%'.$query.'%')->get()
            ]);

           
        
    }

    function getcategoryajax(Request $request)
    {
       
            $categoryID = $request->get('categoryID');
            if($categoryID != "all"){

                return response()->json([
                    'products' => Product::where('categoryID', $categoryID)->get()
                ]);
            }else{
                return response()->json([
                    'products' => Product::get()
                ]);
            }
        

           
        
    }

    function getpriceajax(Request $request)
    {
       
            $max = $request->get('max');
            $min = $request->get('min');

            return response()->json([
                'products' =>  Product::Where('price', '>=', $min)->Where("price", "<=", $max)->get()
            ]);

           
        
    }
    function clearfilterajax(Request $request)
    {
       
           

        return response()->json([
            'products' => Product::get()
        ]);

           
        
    }
}
