<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->user_type === 'student') {
            //return $next($request);
            return redirect('/stddashboard');
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
