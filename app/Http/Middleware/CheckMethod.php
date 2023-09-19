<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMethod {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next, ...$allowedMethods ) {
        $requestMethod = $request->method();

        if ( !in_array($requestMethod, $allowedMethods) ) {
            return response()->json(['error' => 'Método no permitido'], 405);
        }

        return $next($request);
    }
}
