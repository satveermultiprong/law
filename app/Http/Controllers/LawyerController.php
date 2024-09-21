<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;

class LawyerController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:lawyers,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create a new lawyer record
        Lawyer::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            
        ]);

        return redirect()->back()->with('success', 'Registration successful, awaiting verification.');
    }
    public function showProfile(): View
    {
        $lawyer = auth()->guard('lawyer')->user(); // Get the authenticated lawyer
        return view('lawyers.profile', compact('lawyer'));
    }

    
    public function updateProfile(Request $request)
{
    // Fetch the authenticated lawyer
    $lawyer = auth()->guard('lawyer')->user();

    if ($lawyer instanceof \App\Models\Lawyer) {
        // Validate the request data
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:lawyers,email,' . $lawyer->id, // Exclude current email from unique check
            'phone' => 'required|string|max:15',
            'license_number' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'verification_document' => 'file|mimes:pdf,jpg,png|max:2048',
        ]);

        // Update lawyer profile fields
        $lawyer->full_name = $request->full_name;
        $lawyer->email = $request->email;
        $lawyer->phone = $request->phone;
        $lawyer->license_number = $request->license_number;
        $lawyer->specialization = $request->specialization;

        // Upload verification document if provided
        if ($request->hasFile('verification_document')) {
            // Optional: Delete old file
            if ($lawyer->verification_document) {
                Storage::disk('public')->delete($lawyer->verification_document);
            }

            $documentPath = $request->file('verification_document')->store('documents', 'public');
            $lawyer->verification_document = $documentPath;
        }

        // Save updated lawyer profile
        $lawyer->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Profile updated successfully!');
    } else {
        return back()->withErrors('Lawyer not found or unauthorized.');
    }
}


}
