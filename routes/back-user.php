<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/users/profile', [UserController::class, 'profile'])
                ->middleware(['auth'])
                ->name('profile');

Route::post('/users/profile', [UserController::class, 'update_avatar'])
                ->middleware(['auth'])
                ->name('profile.update_avatar');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/create', [UserController::class, 'create'])->name('create_user');
Route::get('/users/{user}', [UserController::class, 'show'])->name('show_user');
Route::post('/users', [UserController::class, 'store'])->name('store_user');
Route::get('/users/{post}/edit', [UserController::class, 'edit'])->name('edit_user');
Route::put('/users/{post}', [UserController::class, 'update']);
Route::delete('/users/{post}', [UserController::class, 'destroy']);