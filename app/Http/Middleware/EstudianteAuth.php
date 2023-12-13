<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EstudianteAuth
{
    public function handle($request, Closure $next)
    {
        if (Auth::guard('estudiante')->check()) {
            return $next($request);
        }

        return redirect()->route('login');
    }
}
