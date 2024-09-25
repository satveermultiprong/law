@extends('layout.app');
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section class="profile-section">
        <div class="container">
            <div class="row">
                <!-- Lawyer Details -->
                <div class="col-md-4 text-center">
                    <img src="https://via.placeholder.com/150" alt="Lawyer Image" class="profile-img">
                    <h1>John Doe</h1>
                    <p>Family Law Specialist</p>
                    <p>10+ Years of Experience</p>
                    <p>New York, NY</p>
                    <a href="{{ route('Book-an-appointment')}}" class="btn btn-custom mt-3">Book an Appointment</a>
                </div>
                <!-- Lawyer Information -->
                <div class="col-md-8">
                    <h2>About</h2>
                    <p>John Doe is an experienced Family Law specialist who has been practicing law for over a decade. He has helped numerous clients navigate complex family legal matters with compassion and expertise.</p>
                    <h2 class="mt-4">Specialties</h2>
                    <ul>
                        <li>Divorce and Separation</li>
                        <li>Child Custody</li>
                        <li>Alimony</li>
                        <li>Domestic Violence</li>
                    </ul>
                    <h2 class="mt-4">Education</h2>
                    <p>Harvard Law School, J.D., 2010</p>
                    <p>University of California, Berkeley, B.A. in Political Science, 2006</p>
                    <h2 class="mt-4">Certifications</h2>
                    <p>Certified Family Law Specialist by the New York State Bar Association</p>
                </div>
            </div>
    
            <div class="row mt-5">
                <!-- Reviews Section -->
                <div class="col-12">
                    <h2>Client Reviews</h2>
                    <!-- Review Card -->
                    <div class="card review-card p-3">
                        <div class="d-flex justify-content-between">
                            <h5>Jane Doe</h5>
                            <div class="review-rating">
                                &#9733; &#9733; &#9733; &#9733; &#9733;
                            </div>
                        </div>
                        <p class="review-text">John was incredibly helpful during my divorce process. He handled everything with professionalism and empathy. Highly recommend!</p>
                    </div>
                    <!-- Review Card -->
                    <div class="card review-card p-3">
                        <div class="d-flex justify-content-between">
                            <h5>Michael Smith</h5>
                            <div class="review-rating">
                                &#9733; &#9733; &#9733; &#9733; &#9734;
                            </div>
                        </div>
                        <p class="review-text">Great lawyer with extensive knowledge in family law. He provided excellent advice and support throughout the case.</p>
                    </div>
                    <!-- Add more reviews as needed -->
                </div>
            </div>
        </div>
    </section>
</div>
