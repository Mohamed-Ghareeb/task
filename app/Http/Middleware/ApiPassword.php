<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiPassword
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
        if ($request->query('api_password') == env('API_PASSWORD')) {
            return $next($request);
        }

        return response()->json("You don't have access this page.");
    }
}
