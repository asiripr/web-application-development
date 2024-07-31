<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Rstd
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type === 'admin') {
            //return $next($request);
            return redirect('/admindashboard');
        }
        else if (Auth::check() && Auth::user()->user_type === 'auser') {
            //return $next($request);
            return redirect('/auserdashboard');
        }
        else if (Auth::check() && Auth::user()->user_type === 'rstd') {
            //return $next($request);
            return redirect('/rstddashboard');
        }
        return redirect('/stddashboard'); // Redirect to student dashboard if not admin
    }
}
