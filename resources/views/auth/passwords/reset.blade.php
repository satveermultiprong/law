@include('layout.header')

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <section aria-label="section" class="">
        <section class="reset-password-section">
            <div class="reset-password-card">
                <h2 class="text-center">Reset Password</h2>
                <p class="text-center text-muted">Enter your new password below to reset your account password.</p>
                
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm new password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-reset-password">Reset Password</button>
                </form>

                <div class="mt-4 text-center">
                    <a href="javascript:history.back()" class="text-primary">Back to Login</a>
                </div>
            </div>
        </section>
    </section>
</div>

@include('layout.footer')
