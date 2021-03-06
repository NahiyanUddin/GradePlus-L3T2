<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admintype
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
        if (Auth::guest())
        {
            return redirect('/');
        }
//        $user = Auth::user();
//        if($user->isAdmin())
//        {
//            return redirect()->intended('/admin');
//        }

        return $next($request);
    }
}
