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
use Illuminate\Support\Facades\Auth;

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

        foreach ($guards as $guard) {

            if (Auth::guard($guard)->check()) {
                $user = auth()->user();
                if ($request->expectsJson()) {
                    return response()->json(['message' => 'Already authenticated.', $user], 200);
                }
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }
}
