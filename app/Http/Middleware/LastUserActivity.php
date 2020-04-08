<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;

class LastUserActivity
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
        if (Auth::check()) {
            $LastUserActivityNow = Carbon::now(); // keep online for 1 min
            $user = Auth::user();
            $user->update([
                'last_online' => $LastUserActivityNow,
            ]);
            return $next($request);
        }
        return $next($request);
    }
}
