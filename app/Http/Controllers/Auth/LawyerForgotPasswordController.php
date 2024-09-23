<?php

// app/Http/Controllers/Auth/LawyerForgotPasswordController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\Lawyer;
use Carbon\Carbon;
use Session;

class LawyerForgotPasswordController extends Controller
{
    // Show the forgot password form
    public function showForgotPasswordForm()
    {
        return view('lawyer.auth.forgot-password');
    }

    // Send OTP to the email
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:lawyers,email',
        ]);

        $otp = rand(100000, 999999);
        $email = $request->email;

        // Save OTP to the session or database
        Session::put('otp', $otp);
        Session::put('lawyer_email', $email);

        // Send OTP via email
        Mail::raw("Your OTP code is: $otp", function ($message) use ($email) {
            $message->to($email)->subject('Password Reset OTP');
        });

        return redirect()->route('lawyer.forgot-password.verify-otp')->with('success', 'OTP has been sent to your email.');
    }

    // Show the OTP verification form
    public function showVerifyOtpForm()
    {
        return view('lawyer.auth.verify-otp');
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        if ($request->otp == Session::get('otp')) {
            return redirect()->route('lawyer.reset-password');
        }

        return back()->withErrors(['otp' => 'Invalid OTP.']);
    }

    // Show the reset password form
    public function showResetPasswordForm()
    {
        return view('lawyer.auth.reset-password');
    }

    // Reset Password
    public function resetPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6',
        ]);

        $lawyer = Lawyer::where('email', Session::get('lawyer_email'))->first();
        $lawyer->password = Hash::make($request->password);
        $lawyer->save();

        // Clear OTP and email from session
        Session::forget(['otp', 'lawyer_email']);

        return redirect()->route('lawyer.login')->with('success', 'Password has been reset successfully.');
    }
}
