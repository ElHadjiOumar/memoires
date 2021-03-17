<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedecinMiddleware
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
        if (Auth::user()->usertype == 'Medecin') {
            return $next($request);
        } else {
            $value = 'warning';
            $request->session()->flash('statuscode', $value);
            return redirect('/dashboard')->with('status', 'Seul le compte Medecin à le droit d acceder à cette page');
        }
    }
}
