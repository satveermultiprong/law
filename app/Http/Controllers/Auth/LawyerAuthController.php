<?php

// app/Http/Controllers/Auth/LawyerAuthController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerAuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('lawyer.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('lawyer')->attempt($credentials)) {
            return redirect()->route('lawyer.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    // Handle the logout request
    public function logout()
    {
        Auth::guard('lawyer')->logout();
        return redirect()->route('lawyer.login');
    }
}
