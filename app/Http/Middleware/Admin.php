<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Session;
use Closure;
use App\User;

class Admin
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
        // grab the user from Auth
        if(Auth::check()) {
            $user = User::find(Auth::user()->id);
        }

        if (!Auth::check() || $user->isAdmin() === false){
            Session::flash("auth", "You are not authorized do see this page.");
            return redirect()->route('home');
        }

        return $next($request);
    }
}
