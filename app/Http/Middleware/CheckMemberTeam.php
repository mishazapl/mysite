<?php

namespace App\Http\Middleware;

use App\Team;
use Closure;

class CheckMemberTeam
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

        if (is_null($memberTeam = Team::find(request('id')))) {
            abort(404);
        }

        return $next($request);
    }
}
