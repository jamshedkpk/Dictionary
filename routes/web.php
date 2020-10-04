<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WordController;
Route::get('/',[AdminController::class, 'index']);
Route::resource('Word',WordController::class);
use App\Http\Controllers\UserController;
Route::get('/users', [UserController::class, 'index'])->name('users.index');
