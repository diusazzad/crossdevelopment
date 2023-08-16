<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function AdminDashboard(){
        return view('admin.dashboard');
    }

    // public function assignRoles(Request $request, $userId)
    // {
    //     $user = User::findOrFail($userId);

    //     $selectedRoles = $request->input('roles', []);
    //     $user->roles()->sync($selectedRoles);

    //     return redirect()->route('admin.dashboard')->with('success', 'Roles assigned successfully.');
    // }
}
