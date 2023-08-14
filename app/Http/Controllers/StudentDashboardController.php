<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentDashboardController extends Controller
{
   public function StudentDashboard(){
    return Inertia::render('StudentDashboard');
   }
}
