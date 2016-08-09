<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAgent
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
        $user = Auth::user();
        if(is_null($user) && !$user->isAgen()){
            return redirect('/auth/login');
        }
        return $next($request);
    }
}
