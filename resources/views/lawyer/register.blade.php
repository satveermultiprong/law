<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .step { display: none; }
        .step.active { display: block; }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Lawyer Registration</h2>
        <div class="card">
            <div class="card-body">
                <form id="registrationForm">
                    <!-- Step 1: User Details -->
                    <div class="step active" id="step1">
                        <h4>Step 1: User Details</h4>
                        <div class="form-group">
                            <label for="name">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" required>
                        </div>
                        <button type="button" class="btn btn-primary nextBtn">Next</button>
                    </div>

                    <!-- Step 2: OTP Verification -->
                    <div class="step" id="step2">
                        <h4>Step 2: OTP Verification</h4>
                        <div class="form-group">
                            <label for="otp">Enter OTP</label>
                            <input type="text" class="form-control" id="otp" name="otp" required>
                        </div>
                        <button type="button" class="btn btn-primary verifyOtpBtn">Verify OTP</button>
                    </div>

                    <!-- Step 3: Set Password -->
                    <div class="step" id="step3">
                        <h4>Step 3: Set Password</h4>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit" class="btn btn-success">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var currentStep = 1;

            // Show next step
            function showStep(step) {
                $('.step').removeClass('active');
                $('#step' + step).addClass('active');
            }

            // Step 1: Collect user details and send OTP
            $('.nextBtn').click(function() {
                var name = $('#name').val();
                var email = $('#email').val();
                var mobile = $('#mobile').val();

                // Ajax request to send OTP
                $.ajax({
                    url: '{{ route("lawyer.sendOtp") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        name: name,
                        email: email,
                        mobile: mobile
                    },
                    success: function(response) {
                        if(response.success) {
                            alert('OTP has been sent to your email.');
                            currentStep = 2;
                            showStep(currentStep);
                        } else {
                            alert('Something went wrong.');
                        }
                    }
                });
            });

            // Step 2: Verify OTP
            $('.verifyOtpBtn').click(function() {
                var otp = $('#otp').val();

                // Ajax request to verify OTP
                $.ajax({
                    url: '{{ route("lawyer.verifyOtp") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        otp: otp
                    },
                    success: function(response) {
                        if(response.success) {
                            alert('OTP verified successfully.');
                            currentStep = 3;
                            showStep(currentStep);
                        } else {
                            alert('Invalid OTP.');
                        }
                    }
                });
            });

            // Step 3: Register the user
            $('#registrationForm').submit(function(e) {
                e.preventDefault();

                var password = $('#password').val();
                var password_confirmation = $('#password_confirmation').val();

                if (password !== password_confirmation) {
                    alert('Passwords do not match.');
                    return;
                }

                // Ajax request to register the user
                $.ajax({
                    url: '{{ route("lawyer.register") }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        password: password,
                        password_confirmation: password_confirmation
                    },
                    success: function(response) {
                        if(response.success) {
                            alert('Registration successful! Please log in.');
                            window.location.href = '{{ route("lawyer.login") }}';
                        } else {
                            alert('Something went wrong.');
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>
