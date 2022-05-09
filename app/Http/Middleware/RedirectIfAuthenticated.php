<?php
/*
 * Copyright (c) 2021. Abror Aliboyev
 * Github and Instagram: @aaliboyev
 * Twitter: @AliboyevAbror
 *
 */

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $domain = $request->headers->get('referer') ?: $request->headers->get('origin');
        foreach ($guards as $guard) {
            $stateful = array_filter(config('sanctum.stateful', []));
            if (Auth::guard($guard)->check()) {
                $user = auth()->user();
                if ($request->expectsJson()) {
                    return response()->json([
                        'message' => 'Already authenticated.',
                        "data" => $user,
                    ], 200);
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }
}
