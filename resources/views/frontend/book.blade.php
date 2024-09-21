@include('layout.header');

<div class="no-bottom no-top" id="content">
    <div id="top"></div>


    <section aria-label="section" class="">
        <section class="" id="hero1">
            <div class="container">
                <h1>Book an Appointment</h1>
                <p class="lead">Schedule your consultation with our legal experts</p>
            </div>
        </section>
        
        <!-- Appointment Booking Form Section -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-5">Schedule Your Appointment</h2>
                <form class="appointment-form mx-auto" style="max-width: 600px;">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" placeholder="Enter Your Full Name" class="form-control" id="fullName" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" placeholder="Enter Your Email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" placeholder="Enter Your Phone No" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="appointmentType" class="form-label">Appointment Type</label>
                        <select class="form-select" id="appointmentType" required>
                            <option value="">Choose...</option>
                            <option value="Legal Consultation">Legal Consultation</option>
                            <option value="Court Representation">Court Representation</option>
                            <option value="Document Review">Document Review</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="appointmentDate" class="form-label">Preferred Date</label>
                        <input type="date" class="form-control" id="appointmentDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="appointmentTime" class="form-label">Preferred Time</label>
                        <input type="time" class="form-control" id="appointmentTime" required>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">Additional Notes</label>
                        <textarea class="form-control" id="notes" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Book Appointment</button>
                </form>
            </div>
        </section>
        
        <!-- Information Section -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">How It Works</h2>
                <p class="text-center">After you submit your appointment request, our team will review your details and contact you to confirm the appointment. Please ensure that your contact information is accurate.</p>
                <p class="text-center"><strong>Cancellation Policy:</strong> If you need to cancel or reschedule, please contact us at least 24 hours before your appointment.</p>
            </div>
        </section>
    </section>
    <section aria-label="section" class="bg-color text-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">75,000 People Choose Legalhelpinindia Every Day</h2>
                </div>
            </div>
        </div>
        <div class="container py-2">
            <div class="row py-4">
                <div class="col-lg-4 py-2">
                    <h4 class="text-center">INDIA'S LEADING LEGAL PLATFORM</h4>
                    <p class="text-center">
                        Get the legal help & representation from over 10,000 lawyers across 700 cities in India
                    </p>
                    <div class="text-center">
                        <a href="{{ route('talk-to-lawyer')}}" class="btn-custom btn-white light">Talk to a Lawyer</a>
                    </div>
                </div>
                <div class="col-lg-4 py-2">
                    <h4 class="text-center">FREE LEGAL ADVICE</h4>
                    <p class="text-center">
                        Post your question for free and get response from experienced lawyers within 48 hours
                    </p>
                    <div class="text-center">
                        <a href="{{ route('free-legal-advice')}}" class="btn-custom btn-white light">Ask a Free Question</a>
                    </div>
                </div>
                <div class="col-lg-4 py-2">
                    <h4 class="text-center">CONTACT A LAWYER</h4>
                    <p class="text-center">
                        Contact and get legal assistance from our lawyer network for your specific matter
                    </p>
                    <div class="text-center">
                        <a href="{{ route('find-lawyer')}}" class="btn-custom btn-white light">Find a Lawyer</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



</div>
@include('layout.footer')