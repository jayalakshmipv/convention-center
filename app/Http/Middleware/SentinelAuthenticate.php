<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class SentinelAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Sentinel::check()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/')->withFlashMessage('Please Login to Continue....!')->withType('info');
            }
        }

        return $next($request);
    }
}


