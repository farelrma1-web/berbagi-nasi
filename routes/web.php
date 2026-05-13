<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

Route::resource('donations', DonationController::class)
    ->middleware('auth');
Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth'])
    ->name('admin.dashboard');
Route::get('/logout-test', function () {

    Auth::logout();

    request()->session()->invalidate();

    request()->session()->regenerateToken();

    return redirect('/login');

});

    require __DIR__.'/auth.php';