<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserLogin
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
        if (!$request->session()->exists('slogin')) {
            return redirect('/user-auth')->with('warning','Please login first!');
        }
        if(session('srole')!='user')
        {
            return redirect('/user-auth');
        }

        return $next($request);
    }
}
