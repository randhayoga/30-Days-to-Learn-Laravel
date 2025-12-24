<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('index');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->paginate(5);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', ['job' => Job::find($id)]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});