<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IniMiddleware
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
        return $next($request);
    }

    public function login()
    {
        if(!auth()->user()->jabatan =='A'){
            return 403;
          }
    }
}
