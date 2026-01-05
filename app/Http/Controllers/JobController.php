<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->orderBy('created_at', 'desc')->paginate(5);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'salary' => ['required', 'numeric']
        ]);

        Job::create([
            'name' => request('title'),
            'salary' => '$' . number_format(request('salary')),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
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
    }

    public function delete(Job $job)
    {
        // Authorize (later...)

        $job->delete();

        return redirect('/jobs');
    }
}
