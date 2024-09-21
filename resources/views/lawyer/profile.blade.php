<!-- resources/views/lawyer/profile.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Lawyer Profile</h2>
    <form method="POST" action="{{ route('lawyer.profile') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $lawyer->name }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $lawyer->email }}" required>
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" class="form-control" value="{{ $lawyer->mobile }}" required>
        </div>
        <div class="form-group">
            <label>License Number</label>
            <input type="text" name="license_number" class="form-control" value="{{ $lawyer->license_number }}">
        </div>
        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control" required>
                <option value="male" {{ $lawyer->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ $lawyer->gender == 'female' ? 'selected' : '' }}>Female</option>
                <option value="other" {{ $lawyer->gender == 'other' ? 'selected' : '' }}>Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ $lawyer->address }}">
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="{{ $lawyer->city }}">
        </div>
        <div class="form-group">
            <label>State</label>
            <input type="text" name="state" class="form-control" value="{{ $lawyer->state }}">
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" name="country" class="form-control" value="{{ $lawyer->country }}">
        </div>
        <div class="form-group">
            <label>Pin Code</label>
            <input type="text" name="pin_code" class="form-control" value="{{ $lawyer->pin_code }}">
        </div>
        <div class="form-group">
            <label>Alternate Mobile</label>
            <input type="text" name="alternate_mobile" class="form-control" value="{{ $lawyer->alternate_mobile }}">
        </div>
        <div class="form-group">
            <label>Specialization</label>
            <select name="specialization_id" class="form-control">
                @foreach ($specializations as $specialization)
                    <option value="{{ $specialization->id }}" {{ $lawyer->specialization_id == $specialization->id ? 'selected' : '' }}>
                        {{ $specialization->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Court Type</label>
            <select name="court_type_id" class="form-control">
                @foreach ($courtTypes as $courtType)
                    <option value="{{ $courtType->id }}" {{ $lawyer->court_type_id == $courtType->id ? 'selected' : '' }}>
                        {{ $courtType->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="profile_image" class="form-control">
        </div>
        <div class="form-group">
            <label>Documents</label>
            <input type="file" name="documents" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
