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
}
