<?php

namespace njxqlus\LaravelValidProxies\Middleware;

use Closure;

class ValidProxies {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->setTrustedProxies([$request->getClientIp()]);

        return $next($request);
    }
}