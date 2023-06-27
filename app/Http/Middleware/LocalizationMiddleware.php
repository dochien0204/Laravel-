<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Check header request and set language default
        $lang = $request->hasHeader('X-localization') ? $request->header('X-localization') : 'en';
        //Set laravel localization
        app()->setLocale($lang);

        return $next($request);
    }
}
