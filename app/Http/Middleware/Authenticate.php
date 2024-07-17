<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');

        $uri = $_SERVER['REQUEST_URI'];
        if(strpos($uri, 'admin') !== false){
            return $request->expectsJson() ? null : route('admin.showlogin');
        }else{
            return $request->expectsJson() ? null : route('login');
        }
    }
}
