<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Mail\OtpMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LawyerRegistrationController extends Controller
{
    // Step 1: Send OTP
    public function sendOtp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lawyers',
            'mobile' => 'required|string|max:10',
        ]);

        // Generate OTP (random 6-digit number)
        $otp = mt_rand(100000, 999999);

        // Store the OTP and user details in the session
        session([
            'otp' => $otp,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile
        ]);

        // Send OTP Email
        Mail::to($request->email)->send(new OtpMail($otp));

        return response()->json(['success' => 'OTP has been sent to your email address.']);
    }

    // Step 2: Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|max:6',
        ]);

        // Check if OTP matches
        if (session('otp') == $request->otp) {
            return response()->json(['success' => 'OTP verified successfully.']);
        } else {
            return response()->json(['error' => 'Invalid OTP.']);
        }
    }

    // Step 3: Register User
    public function register(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create lawyer record
        Lawyer::create([
            'full_name' => session('name'), 
            'email' => session('email'), 
            'mobile' => session('mobile'), 
            'password' => Hash::make($request->password),
        ]);

        // Clear the session data
        session()->forget(['otp', 'name', 'email', 'mobile']);

        return response()->json(['success' => 'Registration successful! Please log in.']);
    }
}
