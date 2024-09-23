<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\View\View;

class LawyerController extends Controller
{
    // Show profile of authenticated lawyer
    public function showProfile(): View
    {
        $lawyer = auth()->guard('lawyer')->user();
        return view('lawyers.profile', compact('lawyer'));
    }

    // Update lawyer profile
    public function updateProfile(Request $request)
    {
        $lawyer = auth()->guard('lawyer')->user();

        if ($lawyer instanceof \App\Models\Lawyer) {
            $request->validate([
                'full_name' => 'required|string|max:255',
                'email' => 'required|email|unique:lawyers,email,' . $lawyer->id,
                'phone' => 'required|string|max:15',
                'license_number' => 'nullable|string|max:255',
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
                'verification_document' => 'nullable|file|mimes:pdf,jpg,png|max:2048',
            ]);

            // Update lawyer profile fields
            $lawyer->full_name = $request->full_name;
            $lawyer->email = $request->email;
            $lawyer->phone = $request->phone;
            $lawyer->license_number = $request->license_number;
            $lawyer->gender = $request->gender;
            $lawyer->address = $request->address;
            $lawyer->city = $request->city;
            $lawyer->state = $request->state;
            $lawyer->country = $request->country;
            $lawyer->pin_code = $request->pin_code;
            $lawyer->alternate_mobile = $request->alternate_mobile;
            $lawyer->specialization_id = $request->specialization_id;
            $lawyer->court_type_id = $request->court_type_id;

            // Handle profile image upload
            if ($request->hasFile('profile_image')) {
                if ($lawyer->profile_image) {
                    Storage::disk('public')->delete($lawyer->profile_image);
                }
                $path = $request->file('profile_image')->store('public/profile_images');
                $lawyer->profile_image = basename($path);
            }

            // Handle document upload if provided
            if ($request->hasFile('verification_document')) {
                if ($lawyer->verification_document) {
                    Storage::disk('public')->delete($lawyer->verification_document);
                }
                $documentPath = $request->file('verification_document')->store('documents', 'public');
                $lawyer->verification_document = $documentPath;
            }

            // Save updates
            $lawyer->save();

            return redirect()->back()->with('success', 'Profile updated successfully!');
        } else {
            return back()->withErrors('Lawyer not found or unauthorized.');
        }
    }
}
