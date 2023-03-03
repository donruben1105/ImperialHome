<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminRegistrationAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user() && Auth::user()->isDefaultAdmin()) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You are not authorized to access this page.');
    }
}