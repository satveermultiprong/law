@include('layout.header');
<div class="no-bottom no-top" id="content">
    <div id="top"></div>


    <section aria-label="section" class="">


        <section class="forgot-password-section">
            <div class="forgot-password-card">
                <h2 class="text-center">Forgot Password</h2>
                <p class="text-center text-muted">Enter your email address below and we'll send you a link to reset your password.</p>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-send-link">Send Reset Link</button>
                </form>
                <div class="mt-4 text-center">
                    <a href="javascript:history.back()" class="text-primary">Back to Login</a>
                </div>
            </div>
        </section>

    </section>
</div>

@include('layout.footer')