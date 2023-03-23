<?php

namespace App\Http\Middleware;

use Closure;

class CheckUsername
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$usernames)
    {
        if (in_array($request->user()->username, $usernames) ) {
            return $next($request);
        }
        return redirect('/beranda');
    }
}
