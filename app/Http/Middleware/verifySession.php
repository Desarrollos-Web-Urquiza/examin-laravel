<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class verifySession
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
        if( $request->session()->has('name') )  {
            return $next($request);
        }   else    {
            echo 'No data in the session';
            return redirect()->route('login');
        }
    }
}
