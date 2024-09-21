@include('layout.header');

<div class="no-bottom no-top" id="content">
    <div id="top"></div>




    <section aria-label="section" class="">

        <section class="text-center management-section">
            <div class="container">
                <h1>Account Management</h1>
                <p class="lead">Manage your bookings, profile, and transactions.</p>
            </div>
        </section>

<!-- Profile Information Section -->
<section class="py-5">
     <div class="container">
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking" type="button" role="tab" aria-controls="booking" aria-selected="true">Booking Management</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile Management</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="transaction-tab" data-bs-toggle="tab" data-bs-target="#transaction" type="button" role="tab" aria-controls="transaction" aria-selected="false">Transaction Report</button>
            </li>
        </ul>

        <div class="tab-content mt-4" id="myTabContent">
            <!-- Booking Management Section -->
            <div class="tab-pane fade show active text-center" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                <h2>Booking Management</h2>
                <p>Manage your bookings and appointments here.</p>
                <!-- Booking Management Table -->
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Booking ID</th>
                            <th scope="col">Service</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>Legal Consultation</td>
                            <td>2024-09-15</td>
                            <td>10:00 AM</td>
                            <td><span class="badge bg-success">Confirmed</span></td>
                        </tr>
                        <tr>
                            <td>#12346</td>
                            <td>Contract Review</td>
                            <td>2024-09-16</td>
                            <td>2:00 PM</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#12347</td>
                            <td>Real Estate Consultation</td>
                            <td>2024-09-17</td>
                            <td>11:00 AM</td>
                            <td><span class="badge bg-danger">Cancelled</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Profile Management Section -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h2 class="text-center">Profile Management</h2>
                <form class="mt-3">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <img src="https://via.placeholder.com/120" alt="Profile Picture" class="profile-picture mb-3">
                            <input type="file" class="form-control" accept="image/*">
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName" value="John Doe" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" value="john.doe@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" value="+1234567890">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" value="1234 Elm Street, City, Country">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Transaction Report Section -->
            <div class="tab-pane fade text-center" id="transaction" role="tabpanel" aria-labelledby="transaction-tab">
                <h2>Transaction Report</h2>
                <p>View and download your transaction reports.</p>
                <!-- Transaction Report Table -->
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Transaction ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#98765</td>
                            <td>2024-09-10</td>
                            <td>$150.00</td>
                            <td><span class="badge bg-success">Completed</span></td>
                            <td><a href="#" class="btn btn-custom">View</a></td>
                        </tr>
                        <tr>
                            <td>#98766</td>
                            <td>2024-09-12</td>
                            <td>$200.00</td>
                            <td><span class="badge bg-warning">Pending</span></td>
                            <td><a href="#" class="btn btn-custom">View</a></td>
                        </tr>
                        <tr>
                            <td>#98767</td>
                            <td>2024-09-14</td>
                            <td>$250.00</td>
                            <td><span class="badge bg-danger">Failed</span></td>
                            <td><a href="#" class="btn btn-custom">View</a></td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4">
                    <button class="btn btn-secondary">Download Report</button>
                </div>
            </div>
        </div>
    </div>
</section>

    </section>



</div>

@include('layout.footer')