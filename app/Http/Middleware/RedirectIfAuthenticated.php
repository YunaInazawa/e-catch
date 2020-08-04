<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
            return redirect(RouteServiceProvider::HOME);
        }

        // if (Auth::guard($guard)->check()) {
        //     if($guard == 'store')
        //         return redirect(RouteServiceProvider::STORE_HOME);
        //     return redirect(RouteServiceProvider::HOME);
        // }

        // if(Auth::guard()->check())
        //     return redirect(RouteServiceProvider::HOME);
        // if(Auth::guard('store')->check()) 
        //     return redirect(RouteServiceProvider::STORE_HOME);

        return $next($request);
    }
}
