<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyUser
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('propertyUser')->check()) {
            return redirect()->route('property.login')->with('error', 'Unauthorized user!'); 
        }

        return $next($request);
    }
}
