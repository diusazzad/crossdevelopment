<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

// use App\Providers\RouteServiceProvider;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = Auth::user();

        if ($user) {
            $userRole = $user->role->name;

            if (in_array($userRole, $roles)) {
                $roleRoutes = [
                    'Admin' => 'admin.dashboard',
                    'Mentor' => 'mentor.dashboard',
                    'Teacher' => 'teacher.dashboard',
                    'Student' => 'student.dashboard',
                    'Parent' => 'parent.dashboard',
                    'Counselor' => 'counselor.dashboard',
                    'Advertiser' => 'advertiser.dashboard',
                    'Manager' => 'manager.dashboard',
                ];

                if (array_key_exists($userRole, $roleRoutes)) {
                    return redirect()->route($roleRoutes[$userRole]);
                }
            }
        }

        // return $next($request);
    }
}
