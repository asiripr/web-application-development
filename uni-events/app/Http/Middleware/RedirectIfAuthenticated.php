<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            switch ($user->usertype) {
                case 'admin':
                    return redirect(('/admindashboard'));
                    break;
                case 'auser':
                    return redirect(('/auserdashboard'));
                    break;
                case 'rstd':
                    return redirect(('/rstddashboard'));
                    break;
                default:
                    return redirect('/stddashboard');
                    break;
            }
        }

        return $next($request);
    }
}
