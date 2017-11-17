<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RightAdminModerator
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

        if (is_null(Auth::user())) {
            abort(401);
        }

        switch (Auth::user()->role_id) {
            case 2:
                break;
            case 3:
                break;
            default:
                abort(403);
        }


        return $next($request);
    }
}
