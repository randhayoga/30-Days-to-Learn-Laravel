<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;

Route::view('/', 'index');
Route::resource('jobs', JobController::class);
Route::view('/contact', 'contact');
Route::view('/login', 'login');