<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddAuthHeader
{
    public function handle(Request $request, Closure $next)
    {
        $token = session('auth_token');

       
        if ($token) {
            $request->headers->set('Authorization', 'Bearer ' . $token);
        }
        if ($request->hasHeader('Authorization')) {
            $token = $request->header('Authorization');
            // Validate the token here
            if (Auth::guard('api')->check()) {
                return $next($request);
            }
        }

        return redirect()->route('authentication');
    }
}
