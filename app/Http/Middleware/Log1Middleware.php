<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Log1Middleware
{
    public function handle(Request $request, Closure $next)
    {
        echo 'log1: '.date('d/m/Y H:i:s').'<br>';
        return $next($request);
    }
}
