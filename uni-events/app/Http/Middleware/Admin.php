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
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            if (Auth::user()->usertype == 'admin') {
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
            case 'auser':
                return redirect()->route('auserdashboard');
            case 'rstd':
                return redirect()->route('rstddashboard');
            default:
                return redirect()->route('stddashboard');
        }
    }
}
