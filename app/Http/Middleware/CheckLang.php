<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $lang = 'es';

        if (session()->has('lang')) {
            $lang = session()->get('lang');
        }
        
        \App::setLocale($lang);

        return $next($request);
    }
}
