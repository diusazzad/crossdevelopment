<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if ($this->userHasRequiredRole($roles)) {
            return $next($request);
        }

        return redirect('/home'); // Redirect to a default page if the user doesn't have the required role.
    }

    protected function userHasRequiredRole(array $roles)
    {
        return Auth::check() && in_array(Auth::user()->role->name, $roles);
    }
}
