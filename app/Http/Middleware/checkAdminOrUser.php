<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAdminOrUser
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
        //check if the user is auth
        if (auth()->check()) {
            //check if the user is admin
            if (auth()->user()->is_admin == 1) {
                //return $next($request);
                return to_route('admin.home');
            } else {
                return to_route('user.home');
                // return redirect()->back();
            }
        }
    }
}
