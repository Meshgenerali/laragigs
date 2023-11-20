<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;


class UserController extends Controller
{
    // show register form/ create form

    public function create() {
        return view('users.register');
    }


    // registering new user
    public function register(Request $request) {
            $formData = $request->validate([
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|min:6'
            ]);

            // hash password
            $formData['password'] = bcrypt($formData['password']);

            //create user
            $user = User::create($formData);

            //login
            auth()->login($user);

            return redirect('/')->with('message', 'User created and logged in successfully');
    }

    // log out user

    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Logged out successfully');
    }

    // show log in form

    public function login() {
        return view('users.login');
    }

    // authenticate user

    public function authenticate(Request $request) {
        $formData = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formData)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }
}
