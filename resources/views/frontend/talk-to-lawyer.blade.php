@include('layout.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="talk-lawyer-section">
        <div class="container">
            <h1 class="text-center">Talk to a Lawyer</h1>
            <p class="text-center text-muted">Get legal advice from our expert lawyers.</p>
    
            <!-- Legal Category Selection -->
            <div class="form-section">
                <label for="legalCategory" class="form-label">Select Legal Category</label>
                <select class="form-select" id="legalCategory">
                    <option selected disabled>Choose a legal category</option>
                    <option value="1">Family Law</option>
                    <option value="2">Criminal Law</option>
                    <option value="3">Business Law</option>
                    <option value="4">Real Estate Law</option>
                    <option value="5">Immigration Law</option>
                </select>
            </div>
    
            <!-- Lawyer Selection -->
            {{-- <div class="form-section">
                <label for="lawyerSelection" class="form-label">Choose a Lawyer</label>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="lawyer-card">
                            <img src="https://via.placeholder.com/100" alt="Lawyer Image">
                            <h5>John Doe</h5>
                            <p class="text-muted">Family Law</p>
                            <button class="btn btn-custom">Select</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="lawyer-card">
                            <img src="https://via.placeholder.com/100" alt="Lawyer Image">
                            <h5>Jane Smith</h5>
                            <p class="text-muted">Criminal Law</p>
                            <button class="btn btn-custom">Select</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="lawyer-card">
                            <img src="https://via.placeholder.com/100" alt="Lawyer Image">
                            <h5>Michael Brown</h5>
                            <p class="text-muted">Business Law</p>
                            <button class="btn btn-custom">Select</button>
                        </div>
                    </div>
                </div>
            </div>
     --}}
            <!-- Schedule Section -->
            <div class="form-section">
                <label for="scheduleMeeting" class="form-label">Schedule a Call/Meeting</label>
                <div class="schedule-section">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Select Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="time" class="form-label">Select Time</label>
                            <input type="time" class="form-control" id="time">
                        </div>
                    </div>
                    <button class="btn btn-custom">Schedule</button>
                </div>
            </div>
    
            <!-- Contact Information -->
            <div class="form-section">
                <label for="contactInfo" class="form-label">Provide Your Contact Information</label>
                <form>
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>
                </form>
            </div>
        </div>
    </section>

</div>

@include('layout.footer')