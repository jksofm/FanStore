<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class Log2Middleware
{
    public function handle(Request $request, Closure $next)
    {
        echo 'log2: '.URL::current().'<br>';
        return $next($request);
    }
}
