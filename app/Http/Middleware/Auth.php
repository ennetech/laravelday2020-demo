<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{
    /**
     * Handle an incoming request.
     *
     * @security auth
     * @securityDescription The token is "Alohomora"
     * @securityParameterName Authorization
     * @securityParameterIn header
     * @securityType apiKey
     *
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Authorization') != "Alohomora") {
            throw new \ErrorException("NOT AUTH");
        }
        return $next($request);
    }
}
