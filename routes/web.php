<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route Admin
Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    // Route yang termasuk circle admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');

    Route::resource('divisi', DivisiController::class);
});

// Route User
Route::middleware('auth')->prefix('user')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('dashboard.user');
});


require __DIR__ . '/auth.php';
