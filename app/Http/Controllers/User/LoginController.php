<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view("login.index");
        // cara ngirim data
        // return view("login", [
        //     'title' => 'Login',
        //     'active' => 'login'
        // ]);
    }
    public function authenthicate(Request $request)
    {
        // validation
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // checking the credentials match to the database
        if (Auth::attempt($credentials)) {
            // dd($credentials['password']);
            // create new session for user prevent csrf
            $request->session()->regenerate();

            // redirect user to intended page.
            return redirect()->intended('user/dashboard');
        }

        // if false credentials then return some message
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
