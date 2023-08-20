<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User\UserFullInfo;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = new User([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Save the user without explicitly setting the role_id
        $user->save();

        return redirect()->route('form')->with('success', 'User created successfully');
    }

    public function retrieveData(Request $request)
    {
        $userId = $request->input('user_id');
        $user = User::select('users.*', 'user_profiles.bio', 'user_profiles.location', 'user_device_infos.device_model', 'user_full_infos.about')
            ->join('user_profiles', 'users.id', '=', 'user_profiles.user_id')
            ->join('user_device_infos', 'users.id', '=', 'user_device_infos.user_id')
            ->join('user_full_infos', 'users.id', '=', 'user_full_infos.user_id')
            ->where('users.id', $userId)
            ->first();

        return view('test', compact('user'));
    }
}
