<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


Route::get('/users/profile', [UserController::class, 'profile'])
                ->middleware(['auth'])
                ->name('profile');

Route::post('/users/profile', [UserController::class, 'update_avatar'])
                ->middleware(['auth'])
                ->name('profile.update_avatar');


