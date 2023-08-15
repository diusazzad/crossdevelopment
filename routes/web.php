<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdvertiserDashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CounselorDashboardController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\MentorDashboardController;
use App\Http\Controllers\ParentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentDashboardController;
use App\Http\Controllers\TeacherDashboardController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Middleware\UserRoleMiddleware;
use App\Http\Middleware\RoleMiddleware;

// use Inertia\Inertia;


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });



Route::get('/', [ContentController::class, 'home']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route::middleware(['web','userrole'])->group(function () {
    Route::middleware(['role:Admin','userrole'])->group(function () {
        Route::get('/admin',[AdminDashboardController::class,'AdminDashboard'])->name('admin.dashboard');
    });

    Route::middleware(['role:student'])->group(function () {
        Route::get('/student', function () {
            return 'student dashboard';
        });
    });
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
