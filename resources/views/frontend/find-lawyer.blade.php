
@extends('layouts.app');
@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section class="search-section">
        <div class="container">
            <h1 class="text-center mb-4">Find a Lawyer</h1>
            <!-- Search Form -->
            <form class="mb-5">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <select name="" id="" class="form-select">
                            <option  selected disabled>Select Your City</option>
                            <option value="">Mumbai</option>
                            <option value="">Delhi</option>
                            <option value="">Bangalore</option>
                            <option value="">Hyderabad</option>
                            <option value="">Ahmedabad</option>
                            <option value="">Chennai</option>
                            <option value="">Kolkata</option>
                            <option value="">Surat</option>
                            <option value="">Pune</option>
                            <option value="">Jaipur</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" aria-label="Specialty">
                            <option selected disabled>Select Specialty</option>
                            <option value="1">Family Law</option>
                            <option value="2">Criminal Law</option>
                            <option value="3">Business Law</option>
                            <option value="4">Real Estate Law</option>
                            <option value="5">Immigration Law</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <select class="form-select" aria-label="Experience">
                            <option selected disabled>Select Experience Level</option>
                            <option value="1">1-3 Years</option>
                            <option value="2">4-7 Years</option>
                            <option value="3">8+ Years</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Search Lawyers</button>
                </div>
            </form>
    
            <!-- Lawyer Listings -->
            <div class="row">
                <!-- Lawyer Card -->
                <div class="col-md-6 mb-4">
                    <div class="card lawyer-card p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/100" alt="Lawyer Image" class="lawyer-img">
                            <div class="lawyer-info">
                                <h5>John Doe</h5>
                                <p>Family Law</p>
                                <p>10+ Years Experience</p>
                                <p>New York, NY</p>
                                {{-- <a href="{{ route('lawyer-profile')}}" class="btn-custom">View Profile</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Lawyer Card -->
                <div class="col-md-6 mb-4">
                    <div class="card lawyer-card p-3">
                        <div class="d-flex align-items-center">
                            <img src="https://via.placeholder.com/100" alt="Lawyer Image" class="lawyer-img">
                            <div class="lawyer-info">
                                <h5>Jane Smith</h5>
                                <p>Criminal Law</p>
                                <p>5+ Years Experience</p>
                                <p>Los Angeles, CA</p>
                                {{-- <a href="{{ route('lawyer-profile')}}" class="btn-custom">View Profile</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more lawyer cards as needed -->
            </div>
        </div>
    </section>
    
</div>

@endsection
