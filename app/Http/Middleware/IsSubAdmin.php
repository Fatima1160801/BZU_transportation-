<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsSubAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)//subAdmin
    {
        $subAdminRole=Role::where('name','subAdmin')->first();
        if(Auth::User()->role_id!==$subAdminRole->id){
            return redirect(url('/'));
        }
        return $next($request);
    }
}
