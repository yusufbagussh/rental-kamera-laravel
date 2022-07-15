<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isSuperAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //Cek Apakah User sudah login dan cek apakah user merupakah superadmin dengan id role 1
        if (!auth()->check() || auth()->user()->user_role != 1) {
            abort(403);
        }
        return $next($request);
    }
}
