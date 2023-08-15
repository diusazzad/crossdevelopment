<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request  $request
     * @param \Closure  $next
     * @param string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next, $role)
    {
        if (auth()->check() && auth()->user()->role->name === $role) {
            return $next($request);
        }

        return redirect('/'); // Redirect unauthorized users to home page
    }
}
