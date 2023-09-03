<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    // // sinngle responsibility principle
    // public function login(LoginRequest $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     $remember = $request->has('remember');

    //     // Attempt to authenticate the user
    //     if (Auth::attempt($credentials, $remember)) {
    //         // Authentication passed
    //         return $this->loginSuccess();
    //     }
    //     return $this->loginFailed();
    // }

    // private function attemptLogin(array $credentials, bool $remember)
    // {
    //     return Auth::attempt($credentials, $remember);
    // }

    // private function loginSuccess()
    // {
    //     // Handle a successful login (e.g., redirection, flash message)
    //     return redirect()->intended('');
    // }

    // private function loginFailed()
    // {
    //     // Handle a failed login (e.g., redirection, error message)
    //     return redirect()->route('auth.login')->with('error', 'Invalid login credentials');
    // }

    // public function adminDashboard()
    // {
    //     $this->authorize('isAdmin');
    // }
    // public function userDashboard()
    // {
    //     // Use the 'isUser' policy to check if the user is a regular user
    //     $this->authorize('isUser');

    //     // Logic for the user dashboard
    // }

    // public function dashboard()
    // {
    //     $userRole = auth()->user()->role;

    //     if ($userRole === 'admin') {
    //         // Logic for the admin dashboard
    //         return view('Dashboard.Admin');
    //     } elseif ($userRole === 'user') {
    //         // Logic for the regular user dashboard
    //         return view('Dashboard.User');
    //     } else {
    //         // Handle other roles or unauthorized access
    //         abort(403); // Return a 403 Forbidden response for unauthorized roles
    //     }
    // }
}
