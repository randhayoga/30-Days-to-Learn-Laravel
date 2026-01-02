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

Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required'],
        'salary' => ['required', 'numeric']
    ]);

    Job::create([
        'name' => request('title'),
        'salary' => '$' . number_format(request('salary')),
        'employer_id' => 1
    ]);
});

Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required'],
        'salary' => ['required', 'numeric']
    ]);

    // Authorize (later...)

    $job->update([
        'name' => request('title'),
        'salary' => '$' . number_format(request('salary')),
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (Job $job) {
    // Authorize (later...)

    // Delete 
    $job->delete();

    // Redirect to all jobs
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});