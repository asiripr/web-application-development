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
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'rstd') {
                return $next($request);
            } else {
                return $this->redirectToUserDashboard();
            }
        }

        return redirect('/');
    }

    protected function redirectToUserDashboard()
    {
        $user = Auth::user();
        switch ($user->usertype) {
            case 'admin':
                return redirect()->route('admindashboard');
            case 'auser':
                return redirect()->route('auserdashboard');
            default:
                return redirect()->route('stddashboard');
        }
    }
}
