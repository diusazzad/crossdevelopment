<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->role) {
            switch ($user->role->name) {
                case 'Admin':
                    return redirect()->route('Admin.dashboard');
                case 'Mentor':
                    return redirect()->route('Mentor.dashboard');
                case 'Teacher':
                    return redirect()->route('Teacher.dashboard');
                case 'Student':
                    return redirect()->route('Student.dashboard');
                case 'Parent':
                    return redirect()->route('Parent.dashboard');
                case 'Counselor':
                    return redirect()->route('Counselor.dashboard');
                case 'Advertiser':
                    return redirect()->route('Advertiser.dashboard');
                case 'Manager':
                    return redirect()->route('Manager.dashboard');

            }
        }

        return $next($request);
    }
}
