<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'rolechecker']], function(){
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/my-profile', [AdminController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile/update', [AdminController::class, 'myProfileUpdate'])->name('my-profile.update');
    Route::post('/my-profile/update/password', [AdminController::class, 'myProfileUpdatePassword'])->name('my-profile.update.password');
    Route::resource('category', CategoryController::class);
    Route::post('/categories-all-delete', [CategoryController::class, 'mass_delete'])->name('categories.mass_action');
    // Route::post('/categories-all-export', [CategoryController::class, 'mass_export'])->name('categories.mass_export');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
