<?php

namespace App\Http\Middleware;

use Closure;

class AdminAuthentication
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
        // return $next($request);
        if($request->user()){
            if($request->user()->is_admin == true){
                return $next($request);
            }
        }

        return new RedirectResponse(url('/dashboard/index'));
    }
}
