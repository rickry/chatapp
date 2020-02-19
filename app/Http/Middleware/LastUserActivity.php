<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
//        if (Auth::check()) {
//            $expiresAt = Carbon::now()->addMinutes(1);
//            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
//        }
        if (auth()->check()) {
//            auth()->user()->update(["last_online_at" => now()]);
        }

        return $next($request);
    }
}
