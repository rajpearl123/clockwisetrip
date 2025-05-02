<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // dd('Middleware executed');
        // Check if the user is authenticated and is an admin
        if (!Auth::guard('vendor')->check()) {
            return redirect()->route('vendor.login')->with('error','Unautorized user!'); // Redirect to admin login if not authenticated
        }

        return $next($request);
    }
}
