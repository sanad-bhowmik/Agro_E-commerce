<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');  // Show the login form view
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);

            if ($user->role === 'admin') {
                return redirect()->route('dashboard');
            }

            return redirect()->route('dashboard');
        }

        // If the login fails, pass the error message to the frontend
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ])->withInput();  // Include old input so that the user doesn't have to re-enter their email
    }


    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
}
