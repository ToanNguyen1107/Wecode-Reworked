<?php

namespace App\Http\Middleware;

use Closure;

class CheckAdmin
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
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1]))
            {
    // The user is active, not suspended, and exists.
            }
        return $next($request);
    }
}
