<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CanEnterDashboard
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
        $roleName=Auth::user()->role->name();
        if($roleName=='subAdmin' or $roleName='Admin'){
            return $next($request);
        }else{
            return redirect(url('/'));
        }

    }
}
