@include('layout.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section class="text-center account-section" id="hero2">
        <div class="container">
            <h1>My Account</h1>
            <p class="lead">Access your account or create a new one.</p>
        </div>
    </section>

    <section aria-label="section">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
                </li>
            </ul>
    
            <div class="tab-content mt-4" id="myTabContent">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form class="mx-auto" style="max-width: 400px;">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email Address</label>
                            <input type="email" placeholder="Enter Your Email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" placeholder="Enter Your Password" class="form-control" id="loginPassword" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" checked>
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <div class="mb-3">
                            <a href="{{ route('forgot-password')}}" class="text-muted">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                </div>
    
                <!-- Sign Up Form -->
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                    <form class="mx-auto" style="max-width: 400px;">
                        <div class="mb-3">
                            <label for="signUpName" class="form-label">Full Name</label>
                            <input type="text" placeholder="Enter Your Name" class="form-control" id="signUpName" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpEmail" class="form-label">Email Address</label>
                            <input type="email" placeholder="Enter Your Email" class="form-control" id="signUpEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpPassword" class="form-label">Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control" id="signUpPassword" required>
                        </div>
                        <div class="mb-3">
                            <label for="signUpConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control" id="signUpConfirmPassword" required>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </section>




</div>



@include('layout.footer')