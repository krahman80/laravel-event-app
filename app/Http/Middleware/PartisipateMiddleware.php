<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PartisipateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $id = null)
    {
        // dd($request->route('id'));
        // $auth::check()

        if (Auth::guest()) {
            // return redirect()->action('LoginController@login');
            return redirect('login');
        } 
        
        return $next($request);
        
        
    }
}
