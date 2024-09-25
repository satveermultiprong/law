<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

        $lawyer = Lawyer::where('email', $request->email)->first();

        if ($lawyer && Hash::check($request->password, $lawyer->password)) {
            Auth::login($lawyer);
            return redirect()->intended('lawyer-dashboard'); // Success
        }
        // dd($credentials);
        $Lawyer = Lawyer::where('email', $lawyer['email'])->first();
        if ($Lawyer) {
            // Password mismatch case
            return back()->withErrors(['password' => 'The provided password is incorrect.']);
        } else {
            // User not found case
            return back()->withErrors(['email' => 'No Lawyer found with this email address.']);
        }
    }

    // Handle the logout request
    public function logout()
    {
        Auth::guard('lawyer')->logout();
        return redirect()->route('lawyer.login');
    }
}
