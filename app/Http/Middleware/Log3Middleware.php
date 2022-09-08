<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Log3Middleware
{
    public function handle(Request $request, Closure $next)
    {
        echo 'log3: '.$request->ip().'<br>';
        return $next($request);
    }
}
