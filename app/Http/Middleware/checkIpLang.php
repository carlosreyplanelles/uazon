<?php

namespace App\Http\Middleware;

use Closure;

class checkIpLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $ip = \Request::ip();

        $userLangs = preg_split('/,|;/', $request->server('HTTP_ACCEPT_LANGUAGE'));

        $lang = current($userLangs);

        $request->merge(['ip' => $ip, 'lang' => $lang]);


        return $next($request);
    }
}
