<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(($attributes))) {
            request()->session()->regenerate();
            return redirect()->intended('/jobs');
        }

        throw ValidationException::withMessages([
            'login' => 'Email or password is incorrect',
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->intended('/');
    }
}
