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
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // $check_role = Auth::user()->load('roles')->roles()->where('role_serial',1)->first();
            if(auth()->user()->role_id == 1 || auth()->user()->role_id == 2){
                return $next($request);
            }else {
                return redirect('/');
            }

        } else {
            return redirect('/login');
        }
    }
}
