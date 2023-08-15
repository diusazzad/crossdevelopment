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
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if ($user && $user->role) {
            switch ($user->role->name) {
                case 'Admin':
                    return redirect()->route('admin.dashboard');
                case 'Mentor':
                    return redirect()->route('mentor.dashboard');
                case 'Teacher':
                    return redirect()->route('teacher.dashboard');
                case 'Student':
                    return redirect()->route('student.dashboard');
                case 'Parent':
                    return redirect()->route('parent.dashboard');
                case 'Counselor':
                    return redirect()->route('counselor.dashboard');
                case 'Advertiser':
                    return redirect()->route('advertiser.dashboard');
                case 'Manager':
                    return redirect()->route('manager.dashboard');

            }
        }
        // return redirect('/');
        return $next($request);
    }
}
