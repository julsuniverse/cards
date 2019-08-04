<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    const ADMIN = 'admin';

    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\Auth::user()->role != self::ADMIN) {
            return redirect('/');
        }
        return $next($request);
    }
}