<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->exists('login')) {
            return redirect('/admin-login');
        }
        if(session('role')!='admin')
        {
            return redirect('/admin-login');
        }

        return $next($request);
    }
}
