<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('username_admin')) {
            return redirect('/admin/login');
        }
        return $next($request);
    }
}
