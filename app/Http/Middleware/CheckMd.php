<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckMd
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
        $role  = Auth()->user()->role;

        if($role == "MD"){

             return $next($request);
        }

        return redirect('/');
       
    }
}
