@include('layout.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section aria-label="section" class="">
        <section class="reset-password-section">
            <div class="reset-password-card">
                <h2 class="text-center">Reset Password</h2>
                <p class="text-center text-muted">Enter your email address below and we'll send you a link to reset your password.</p>

                <!-- Display Status Message -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-reset-password">Send Password Reset Link</button>
                </form>

                <div class="mt-4 text-center">
                    <a href="javascript:history.back()" class="text-primary">Back to Login</a>
                </div>
            </div>
        </section>
    </section>
</div>

@include('layout.footer')
