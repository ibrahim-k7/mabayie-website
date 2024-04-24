<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    // adding by ibrahim | this fun for check the column (is_admin) and redirect for right route
    public function handle(Request $request, Closure $next)
    {
        //check if the user is auth
        if (auth()->check()) {
            //check if the user is admin
            if (auth()->user()->is_admin == 1) {
                return $next($request);
            } else {
                // return to_route('user.home');
                return redirect()->back();
            }
        }
    }
}
