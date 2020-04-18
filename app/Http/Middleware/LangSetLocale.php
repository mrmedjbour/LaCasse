<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;

class LangSetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Locallang = Cookie::get('lang');

        if (isset($Locallang) && in_array($Locallang, ['en', 'ar', 'fr'])) {
            $Locallang = $Locallang;
        } else {
            $Locallang = "fr";
        }

        if ($request->filled('lang') && in_array($request->lang, ['en', 'ar', 'fr'])) {
            Cookie::queue('lang', $request->lang, 60 * 24 * 90);
            $Locallang = $request->lang;
        }

        App::setLocale($Locallang);
        return $next($request);
    }
}
