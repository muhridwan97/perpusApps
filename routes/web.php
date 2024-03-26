<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers as Controller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controller\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controller\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controller\ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth', 'role:admin|user')->group(function () {
    Route::get('/admin/profile', [Controller\Admin\ProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [Controller\Admin\ProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [Controller\Admin\ProfileController::class, 'destroy'])->name('admin.profile.destroy');
});

require __DIR__.'/auth.php';
