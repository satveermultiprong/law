<?php

// app/Http/Controllers/Auth/LawyerAuthController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LawyerAuthController extends Controller
{
    public function showRegistrationForm()
    {
        $specializations = \App\Models\Specialization::all();
        $courtTypes = \App\Models\CourtType::all();
        return view('lawyer.register', compact('specializations', 'courtTypes'));
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:lawyers',
            'mobile' => 'required|string|max:15|unique:lawyers',
            'password' => 'required|string|min:8|confirmed',
            'license_number' => 'nullable|string|max:20',
            'specialization_id' => 'nullable|exists:specializations,id',
            'court_type_id' => 'nullable|exists:court_types,id',
        ]);

        $lawyer = Lawyer::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'license_number' => $request->license_number,
            'specialization_id' => $request->specialization_id,
            'court_type_id' => $request->court_type_id,
        ]);

        Auth::guard('lawyer')->login($lawyer);

        return redirect()->route('lawyer.dashboard');
    }

    public function showLoginForm()
    {
        return view('lawyer.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('lawyer')->attempt($credentials)) {
            return redirect()->route('lawyer.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::guard('lawyer')->logout();
        return redirect()->route('lawyer.login');
    }

    public function showProfile()
    {
        $lawyer = Auth::guard('lawyer')->user();
        $specializations = \App\Models\Specialization::all();
        $courtTypes = \App\Models\CourtType::all();
        return view('lawyer.profile', compact('lawyer', 'specializations', 'courtTypes'));
    }

    public function updateProfile(Request $request)
    {
        $lawyer = Auth::guard('lawyer')->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:lawyers,email,' . $lawyer->id,
            'mobile' => 'required|string|max:15|unique:lawyers,mobile,' . $lawyer->id,
            'license_number' => 'nullable|string|max:20',
            'gender' => 'required|string|in:male,female,other',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'pin_code' => 'nullable|string|max:10',
            'alternate_mobile' => 'nullable|string|max:15|unique:lawyers,alternate_mobile,' . $lawyer->id,
            'specialization_id' => 'required|exists:specializations,id',
            'court_type_id' => 'required|exists:court_types,id',
            'profile_image' => 'nullable|image|max:2048',
            'documents' => 'nullable|file|max:10240',
        ]);

        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('public/profile_images');
            $lawyer->profile_image = basename($path);
        }

        if ($request->hasFile('documents')) {
            $path = $request->file('documents')->store('public/documents');
            $lawyer->documents = basename($path);
        }

        $lawyer->update($request->only(
            'name', 'email', 'mobile', 'license_number', 'gender', 'address', 'city', 'state',
            'country', 'pin_code', 'alternate_mobile', 'specialization_id', 'court_type_id'
        ));

        return redirect()->route('lawyer.profile')->with('success', 'Profile updated successfully.');
    }
}
