<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WordController;
Route::get('/',[AdminController::class, 'index']);
Route::resource('Word',WordController::class);

