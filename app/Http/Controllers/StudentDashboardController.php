<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentDashboardController extends Controller
{
    public function StudentDashboard()
    {
        return Inertia::render('StudentDashboard');
    }

    public function index()
    {
        return User::all();
    }
}
