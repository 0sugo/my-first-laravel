<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () { return view('welcome');});
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::delete('/users/{user}',[UserController::class,'destroy'])->name('users.destroy');
Route::get('/users/{user}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('/users/{user}',[UserController::class,'update'])->name('users.update');

// profile
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');

// Route to handle the profile update
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->name('profiles.update');