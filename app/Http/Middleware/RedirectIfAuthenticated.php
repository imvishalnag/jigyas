<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {        
        if (Auth::guard($guard)->check()) {
            switch ($guard) {
               case 'admin':
                   $route = 'admin/deshboard';
                   break;
              default:
                   $route = 'admin/deshboard';
           }
           return redirect($route);
       }

        return $next($request);
    }
}
