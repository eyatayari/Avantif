<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard=="prestataire"&&Auth::guard($quard)->check()) {
            return redirect('/prestataire');
        }
        if ($guard=="gerent"&&Auth::guard($quard)->check()) {
            return redirect('/gerent');
        }
        if (Auth::guard($quard)->check()) {
            return redirect('/');
        }


        return $next($request);
    }
}
