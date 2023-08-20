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
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use Inertia\Inertia;


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


// Test

Route::get('/', [TestController::class, 'form'])->name('form');
Route::post('/form', [TestController::class, 'store'])->name('store');
Route::get('/testdb', [TestController::class, 'retrieveData'])->name('retrivedata');

Route::get('/o', function () {
    // Clear cache and generate optimized files
    Artisan::call('optimize:clear');
    Artisan::call('optimize');

    // Clear route cache
    Artisan::call('route:clear');

    // Clear view cache
    Artisan::call('view:clear');

    // Clear configuration cache
    Artisan::call('config:clear');

    // Clear application cache
    Artisan::call('cache:clear');

    return 'Application optimized and caches cleared.';
});



// Route::get('/student', [StudentDashboardController::class, 'index']);


// Route::get('/', [ContentController::class, 'home']);

// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);









// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
