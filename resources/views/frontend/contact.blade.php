@include('layout.header');
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section aria-label="section" class="relative z1000">
        <div class="container-fluid" id="hero">
            <h1>Contact Us</h1>
            <p class="lead">We're here to help you with your legal needs</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact-info">
                    <h2>Contact Information</h2>
                    <p><i class="bi bi-geo-alt-fill"></i>123 Legal St, Law City, LC 45678</p>
                    <p><i class="bi bi-telephone-fill"></i><a href="tel:+1234567890">+1 234 567 890</a></p>
                    <p><i class="bi bi-envelope-fill"></i><a href="mailto:info@legalhelp.com">info@legalhelp.com</a></p>
                    <p><i class="bi bi-clock-fill"></i>Mon - Fri: 9:00 AM - 5:00 PM</p>
                </div>
                <div class="col-md-6">
                    <h2>Our Location</h2>
                    <iframe src="your-google-map-embed-url" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
<!-- Contact Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Get in Touch</h2>
        <form class="contact-form mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control" id="phone">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-select" id="subject" required>
                    <option value="">Choose...</option>
                    <option value="Legal Advice">Legal Advice</option>
                    <option value="Consultation">Consultation</option>
                    <option value="Representation">Representation</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
</section>

    </section>


</div>

@include('layout.footer')