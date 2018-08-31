<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckPassChange
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
        if ((!$request->is('admin/users/*') and !$request->is('admin/logout')) and Auth::check()) {
            $user = $request->user();
            return $user->alter_pass ? $next($request) : redirect()->route('voyager.users.edit', $user->id);
        }

        return $next($request);
    }
}
