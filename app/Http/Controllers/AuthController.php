<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        sleep(1);
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string','min:8','confirmed'],
        ]);
        // return "pass";
        // Create the user
        $user = User::create($request->all());

        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registration successful.');
    }

}


