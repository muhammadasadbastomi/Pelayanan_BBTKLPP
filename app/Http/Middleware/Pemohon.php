<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Pemohon
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
                return redirect()->route('admin.index');
                break;
            case 2:
                return redirect()->route('penyelia.index');
                break;
            case 0:
                return $next($request);
                break;
        }

    }
}
