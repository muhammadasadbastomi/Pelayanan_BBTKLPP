<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        switch (Auth::user()->role) {
            case 1:
                return $next($request);
                break;
            case 2:
                return redirect()->route('penyelia.index');
                break;
            case 0:
                return redirect()->route('pemohon.index');
                break;
        }

    }
}
