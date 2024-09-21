@include('layout.header');

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section class="panel-section">
        <div class="container">
            <!-- Lawyer Header -->
            <div class="lawyer-header">
                <h1 class="mb-4">Lawyer Panel</h1>
                <!-- Lawyer Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="lawyerDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        John Doe
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="lawyerDropdown">
                        <li><a type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                    </ul>
                </div>
            </div>
    
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="lawyerPanelTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="booking-management-tab" data-bs-toggle="tab" data-bs-target="#booking-management" type="button" role="tab" aria-controls="booking-management" aria-selected="true">Booking Management</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-management-tab" data-bs-toggle="tab" data-bs-target="#profile-management" type="button" role="tab" aria-controls="profile-management" aria-selected="false">Profile Management</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="transaction-report-tab" data-bs-toggle="tab" data-bs-target="#transaction-report" type="button" role="tab" aria-controls="transaction-report" aria-selected="false">Transaction Report</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="service-management-tab" data-bs-toggle="tab" data-bs-target="#service-management" type="button" role="tab" aria-controls="service-management" aria-selected="false">Service Management</button>
                </li>
            </ul>
    
            <!-- Tab Content -->
            <div class="tab-content" id="lawyerPanelTabContent">
                <!-- Booking Management Tab -->
                <div class="tab-pane fade show active" id="booking-management" role="tabpanel" aria-labelledby="booking-management-tab">
                    <h2>Booking Management</h2>
                    <p>Manage all your bookings and appointments here.</p>
                    <!-- Example Table -->
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Booking ID</th>
                                <th>Client Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#101</td>
                                <td>Jane Doe</td>
                                <td>2024-09-05</td>
                                <td>10:00 AM</td>
                                <td><span class="badge bg-success">Confirmed</span></td>
                            </tr>
                            <tr>
                                <td>#102</td>
                                <td>John Smith</td>
                                <td>2024-09-06</td>
                                <td>2:00 PM</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <!-- Profile Management Tab -->
                <div class="tab-pane fade" id="profile-management" role="tabpanel" aria-labelledby="profile-management-tab">
                    <h2>Profile Management</h2>
                    <form class="mt-3">
                        <div class="mb-3">
                            <label for="lawyerName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="lawyerName" value="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label for="lawyerEmail" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="lawyerEmail" value="john.doe@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="lawyerPhone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="lawyerPhone" value="+1234567890">
                        </div>
                        <div class="mb-3">
                            <label for="lawyerSpecialty" class="form-label">Specialty</label>
                            <select class="form-select" id="lawyerSpecialty" required>
                                <option selected>Family Law</option>
                                <option>Criminal Law</option>
                                <option>Business Law</option>
                                <option>Real Estate Law</option>
                                <option>Immigration Law</option>
                            </select>
                        </div>
                        <button type="submit" class="btn-custom">Save Changes</button>
                    </form>
                </div>
    
                <!-- Transaction Report Tab -->
                <div class="tab-pane fade" id="transaction-report" role="tabpanel" aria-labelledby="transaction-report-tab">
                    <h2>Transaction Report</h2>
                    <p>View all your transactions here.</p>
                    <!-- Example Table -->
                    <table class="table table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Transaction ID</th>
                                <th>Client Name</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#T101</td>
                                <td>Jane Doe</td>
                                <td>$500</td>
                                <td>2024-09-05</td>
                                <td><span class="badge bg-success">Completed</span></td>
                            </tr>
                            <tr>
                                <td>#T102</td>
                                <td>John Smith</td>
                                <td>$300</td>
                                <td>2024-09-06</td>
                                <td><span class="badge bg-danger">Failed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <!-- Service Management Tab -->
                <div class="tab-pane fade" id="service-management" role="tabpanel" aria-labelledby="service-management-tab">
                    <h2>Service Management</h2>
                    <p>Manage your services here.</p>
                    <!-- Example List with Actions -->
                    <ul class="list-group mt-3">
                        <li class="list-group-item">
                            Service 1 - Family Law Consultation
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline-primary">Update</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Service 2 - Criminal Law Advice
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline-primary">Update</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </li>
                        <li class="list-group-item">
                            Service 3 - Business Law Assistance
                            <div class="service-actions">
                                <button class="btn btn-sm btn-outline-primary">Update</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Modal Structure -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <h5>Are you sure you want to logout?</h5>
                <p>Once you log out, you will need to log in again to access your dashboard.</p>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <a href="#" class="btn-cancel" data-bs-dismiss="modal">Cancel</a>
                <button type="button" class="btn btn-logout">Logout</button>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')
