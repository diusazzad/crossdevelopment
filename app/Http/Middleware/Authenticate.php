<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
    }
}
