@include('layout.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section aria-label="section" class="auth-section">
        <div class="container">
            <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
                </li>
            </ul>

            <div class="tab-content mt-4" id="myTabContent">
                <!-- Login Form -->
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <div><a href="{{ route('password.request') }}" class="text-primary">Forgot Password?</a></div>
                        <button type="submit" class="btn btn-custom w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@include('layout.footer')
