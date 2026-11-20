<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // validation data
        $validatedData = $request->validate([
            'email' => 'required|unique:users|email:dns',
            'username' => 'required|unique:users|min:3|max:255',
            'fullname' => 'required|min:3|max:255',
            'password' => [Password::min(8)->letters()->mixedCase()->numbers()->uncompromised(), 'required', 'confirmed'],
            // Password::min(8)->mixedCase()->uncompromised(3)->letters()->numbers()->symbols()
            'password_confirmation' => ['required_with:password', 'same:password_confirmation',]
        ]);

        // hash password
        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['password'] = bcrypt($validatedData['password']);

        // create user in the database
        User::create($validatedData);

        // flash message & redirect
        return redirect('/login')->with('success', 'Registration Complete! Please Login!');
    }
}
