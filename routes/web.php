<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/editPost/{id}', [\App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
    Route::patch('/updatePost/{id}', [\App\Http\Controllers\PostsController::class, 'update'])->name('post.update');
    Route::delete('/delPost/{id}', [\App\Http\Controllers\PostsController::class, 'destroy'])->name('post.destroy');

    Route::get('/editDoctor/{id}', [\App\Http\Controllers\DoctorsController::class, 'edit'])->name('doctor.edit');
    Route::patch('/updateDoctor/{id}', [\App\Http\Controllers\DoctorsController::class, 'update'])->name('doctor.update');
    Route::delete('/delDoctor/{id}', [\App\Http\Controllers\DoctorsController::class, 'destroy'])->name('doctor.destroy');
    
    Route::get('/editHospital/{id}', [\App\Http\Controllers\HospitalsController::class, 'edit'])->name('hospital.edit');
    Route::patch('/updateHospital/{id}', [\App\Http\Controllers\HospitalsController::class, 'update'])->name('hospital.update');
    Route::delete('/delHospital/{id}', [\App\Http\Controllers\HospitalsController::class, 'destroy'])->name('hospital.destroy');
});

require __DIR__.'/auth.php';
