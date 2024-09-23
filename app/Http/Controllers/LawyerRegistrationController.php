<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


session()->flush(); // Call this at the start of sendOtp

class LawyerRegistrationController extends Controller
{

    public function showRegistrationForm()
    {
        Log::info("Loading registration form"); // At the start of showRegistrationForm
        return view('lawyer.register'); // Just return the view, no checks here
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:lawyers,email',
            'mobile' => 'required|string|max:15',
        ]);

        // Generate OTP
        $otp = rand(100000, 999999);

        // Store OTP in session for verification
        session(
            ['otp' => $otp]        );
            $request->session()->put('user_data', $request->only('name', 'email', 'mobile'));

        // Send OTP to email (you should implement this method)
        Mail::to($request->email)->send(new \App\Mail\OtpMail($otp));

        return response()->json(['success' => true]);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate(['otp' => 'required|string']);
        $sessionOtp = session('otp');

        if ($request->otp == $sessionOtp) {
            session(['otp_verified' => true]); // Mark OTP as verified
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'error' => 'Invalid OTP.']);
    }

    public function register(Request $request)
    {
        if (!session('otp_verified')) {
            return response()->json(['error' => 'Please verify OTP first.']);
        }

        $userData = $request->session()->get('user_data');

        $lawyer = new Lawyer();
        $lawyer->name = $userData['name'];
        $lawyer->email = $userData['email'];
        $lawyer->mobile = $userData['mobile'];
        $lawyer->password = Hash::make($request->password);
        $lawyer->save();

        // Clear session data
        session()->forget(['otp', 'otp_verified']);

        return response()->json(['success' => true]);
    }
}
