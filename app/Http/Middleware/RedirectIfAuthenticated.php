<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            if($request->get('r') && $request->get('r') == 'cp' && !Auth::user()->isAdmin()){
                $request->session()->flash('error', 'This user is not allowed to access the controlpanel');
            }

            if(Auth::user()->isAdmin()){

                if($request->get('r') && $request->get('r') == 'ur'){
                    return redirect('/user-response');
                }else{
                    return redirect('/controlpanel/dashboard');
                }
            }else{
                return redirect('/user-response/');
            }
        }

        return $next($request);
    }
}
