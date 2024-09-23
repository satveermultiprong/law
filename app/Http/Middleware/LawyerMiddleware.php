<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LawyerMiddleware
{
    public function handle($request, Closure $next, $guard = 'lawyer')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('lawyer.login');
        }

        return $next($request);
    }
}