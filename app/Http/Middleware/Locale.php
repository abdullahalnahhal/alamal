<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        $locales = config('app.locales'); 
        if (!empty($request->segments()) && in_array($request->segment(1), $locales)) {
            $segment = $request->segment(1);
        }elseif (empty($request->segments()) || !in_array($request->segment(1), $locales)){
            $segment = 'en';
        }
        changeLanguageAdmin($segment);
        return $next($request);
    }
}
