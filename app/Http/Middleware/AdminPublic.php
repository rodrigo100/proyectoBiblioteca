<?php

namespace App\Http\Middleware;

use Closure;

class AdminPublic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->user()->esAdm() || auth()->user()->esPub())
            return $next($request);
        else abort(403);
    }
}
