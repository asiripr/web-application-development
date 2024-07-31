<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Auser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->user_type == 'auser') {
                return $next($request);
            } elseif (Auth::user()->user_type == 'admin') {
                return redirect()->route('admindashboard');
            } elseif (Auth::user()->user_type == 'rstd') {
                return redirect()->route('rstddashboard');
            } else {
                return redirect()->route('stddashboard');
            }
        }

        return redirect('/');
    }
}
