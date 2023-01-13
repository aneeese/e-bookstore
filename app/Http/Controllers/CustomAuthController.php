<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    // accessing user login page
    function index() {
        return view('user/login');
    }

    // accessing registration pg
    function register() {
        return view('user/sign_up');
    }

    // new user registration
    function validate_registration(Request $request) {
        $request -> validate([
            'name'          => 'required',
            'email'         => 'required|email|unique:users',
            'password'      => 'required|min:6'
        ]);

        $data = $request -> all();

        User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'gender'    => $data['gender'],
            'dob'       => $data['dob']
        ]);

        return redirect('login');
    }


    // validating user credentials for login
    function validate_login(Request $request) {
        $request -> validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);

        $credentials = $request -> only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('home');
        }
        return redirect('login') -> with('success', 'Login details are not valid');
    }

    // logout function
    function logout() {
        Auth::logout();
        return redirect('login');
    }
}