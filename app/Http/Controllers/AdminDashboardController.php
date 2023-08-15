<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminDashboardController extends Controller
{
    public function AdminDashboard(){
        return view('admin.dashboard');
    }
}
