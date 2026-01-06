<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;

Route::view('/', 'index');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/create', [JobController::class, 'create']);
Route::post('/jobs', [JobController::class, 'store']);
Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
->middleware('auth')
->can('updateDelete', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])
->middleware('auth')
->can('updateDelete', 'job');

Route::delete('/jobs/{job}', [JobController::class, 'destroy'])
->middleware('auth')
->can('updateDelete', 'job');

Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('throttle:3,1');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);
