<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Log4Middleware
{
    public function handle(Request $request, Closure $next)
    {
        echo 'log4: '.$request->path().'<br>';
        return $next($request);
    }
}
