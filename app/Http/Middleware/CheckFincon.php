<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckFincon
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

        if($role == "FC"){

             return $next($request);
        }

        return redirect('/');
       
    }
}
