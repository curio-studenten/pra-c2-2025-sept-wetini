<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        $locale = Session::get('locale', substr($request->server('HTTP_ACCEPT_LANGUAGE'), 0, 2));
        if (in_array($locale, ['en', 'nl'])) {
            App::setLocale($locale);
        }
        return $next($request);
    }
}
