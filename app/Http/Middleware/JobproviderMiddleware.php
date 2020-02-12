<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class JobproviderMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         if(Auth::user()->role_id==3){
            return $next($request);
        }else{

            return redirect()->route('login')->with('msg','Invalid Username or Password');
        }
    }
}
