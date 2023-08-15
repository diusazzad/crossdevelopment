<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

// use Inertia\Inertia;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         $user = Auth::user();
    //         if ($user && $user->role) {
    //             switch ($user->role->name) {
    //                 case 'Admin':
    //                     return redirect()->route('admin.dashboard');
    //                 case 'Mentor':
    //                     return redirect()->route('mentor.dashboard');
    //                 case 'Teacher':
    //                     return redirect()->route('teacher.dashboard');
    //                 case 'Student':
    //                     return redirect()->route('student.dashboard');
    //                 case 'Parent':
    //                     return redirect()->route('parent.dashboard');
    //                 case 'Counselor':
    //                     return redirect()->route('counselor.dashboard');
    //                 case 'Advertiser':
    //                     return redirect()->route('advertiser.dashboard');
    //                 case 'Manager':
    //                     return redirect()->route('manager.dashboard');
    //             }
    //         }
    //     }

    //     return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    // }


    public function logout(Request $request)
    {
        Auth::logout();

        return redirect(route('login'));
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     // 'role' => 'required|in:superadmin,admin,editor,user',
        // ]);

        // $data = $request->all();
        // $data['password'] = Hash::make($request->password);

        // $user = User::create($data);

        // Auth::login($user);

        // return redirect()->route('login'); // Redirect to the home page after successful registration.

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => null, // Set email verification as pending
        ]);

        // Send email verification notification
        $user->sendEmailVerificationNotification();

        return redirect()->route('login')
            ->with('success', 'Registration successful! Please check your email for verification.');
    }

}
