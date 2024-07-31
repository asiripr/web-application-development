<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'admin') {
                return $next($request);
            } elseif (Auth::user()->user_type == 'auser') {
                return redirect()->route('auserdashboard');
            } elseif (Auth::user()->user_type == 'rstd') {
                return redirect()->route('rstddashboard');
            } else {
                return redirect()->route('stddashboard');
            }
        }
        return redirect('/'); // Redirect to student dashboard if not admin
    }
}
