<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdvertiserDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CounselorDashboardController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\MentorDashboardController;
use App\Http\Controllers\ParentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;






Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post')->middleware('role:admin');

Route::get('/user', [StudentDashboardController::class, 'StudentDashboard']);
Route::get('/admin', [AdminDashboardController::class, 'AdminDashboard'])->name('dashboard');


// Route::middleware(['auth', 'role'])->group(function () {
//     // Route::get('/dashboard', [AdminDashboardController::class, 'AdminDashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [AdvertiserDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [CounselorDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [ManagerDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [MentorDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [ParentDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [StudentDashboardController::class, 'dashboard'])->name('dashboard');
// });
// Route::middleware(['auth', 'role'])->group(function () {
//     Route::get('/dashboard', [TeacherDashboardController::class, 'dashboard'])->name('dashboard');
// });


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     // Define admin routes
// });

// Route::middleware(['auth', 'role:mentor'])->group(function () {
//     Route::get('/mentor/dashboard', [MentorController::class, 'dashboard'])->name('mentor.dashboard');
//     // Define mentor routes
// });

// Route::middleware(['auth', 'role:student'])->group(function () {
//     Route::get('/student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
//     // Define student routes
// });



// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
