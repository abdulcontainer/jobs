<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobController;

Route::view('/','login')->name('login');
Route::post('login',[UserController::class,'login']);

// Route::get('add-job',[JobController::class])
Route::view('/register','userRegistration');
Route::post('register',[UserController::class,'registration']);

Route::resource('/job',App\Http\Controllers\JobController::class);


