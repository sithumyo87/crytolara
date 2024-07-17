<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        // foreach ($guards as $guard) {
        //     if (Auth::guard($guard)->check()) {
        //         return redirect(RouteServiceProvider::HOME);
        //     }
        // }

        $uri    = $_SERVER['REQUEST_URI'];
        foreach ($guards as $guard) {
            if (Auth::guard('admin')->check()) {
                if(strpos($uri,  'admin') !== false){
                    return redirect(RouteServiceProvider::ADMINHOME);
                }
            }
            if (Auth::guard('web')->check()) {
                if(!(strpos($uri,  'admin') !== false)){
                    return redirect(RouteServiceProvider::HOME);
                }
            }
            if (Auth::guard($guard)->check()) {
                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
