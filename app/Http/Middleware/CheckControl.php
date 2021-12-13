<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckControl
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

        if($role == "IC"){

             return $next($request);
        }

        return redirect('/');
       
    }
}
