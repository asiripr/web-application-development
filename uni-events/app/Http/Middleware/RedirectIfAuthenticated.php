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
                    return redirect(('/admin_dashboard'));
                    break;
                case 'auser':
                    return redirect(('/auser_dashboard'));
                    break;
                case 'rstd':
                    return redirect(('/rstd_dashboard'));
                    break;
                default:
                    return redirect('/student_dashboard');
                    break;
            }
        }

        return $next($request);
    }
}
