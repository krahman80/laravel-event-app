<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPartisipate
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
        // dd($request->route('id'));
        if (!Auth::check()){
            // ask user to login
            // return redirect()->action('LoginController@showLoginForm', ['id' => $request->route('id')]);
            return redirect()->route('login',['id' => $request->route('id')]);
        }

        return $next($request);
    }
}
