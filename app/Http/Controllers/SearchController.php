<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getsearch(Request $request)
    {
        return view('searchajax');
    }

    function getsearchajax(Request $request)
    {
        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('product')
                ->where('name_product', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach ($data as $row) {
                $output .= '
                <li><a href="data/' . $row->id . '">' . $row->name_product . '</a></li>';
            }
            $output .= '</ul>';
            echo $output;
        }
    }  
}
