<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\superadmin\SuperadminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user();

    if ($user->role->name === App\Models\Role::SUPER_ADMIN) {
        return view('dashboard.super_admin');
    } elseif ($user->role->name === App\Models\Role::ADMIN) {
        return view('dashboard.admin');
    } else {
        return view('dashboard.user');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Superadmin
Route::get('/usermanage', [SuperadminController::class, 'index'])->name('usermanage.index');
Route::get('/edit-user/{id}', [SuperadminController::class, 'edit'])->name('usermanage.edit');
Route::put('/update-user/{id}', [SuperadminController::class, 'update'])->name('usermanage.update');
Route::post('/store-user', [SuperadminController::class, 'store'])->name('usermanage.store');
require __DIR__.'/auth.php';
