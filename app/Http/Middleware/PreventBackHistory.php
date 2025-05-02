<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        {
            \Log::channel('prevent-history')->info('PreventBackHistory middleware triggered for URL: ' . $request->url());
            \Log::info('PreventBackHistory middleware triggered for URL: ' . $request->url());
    
            abort(500, 'Middleware Triggered'); // This will help ensure the middleware is executed
    
            $response = $next($request);
    
            return $response->header('Cache-Control', 'no-cache, no-store, must-revalidate')
                            ->header('Pragma', 'no-cache')
                            ->header('Expires', '0');
        }
    }
}
