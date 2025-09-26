@extends('frontend.layouts.main')

@section('title', 'Contact Us')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center mt-5" style="background-color: #e9ebee;">
    <div class="container">
        <h1>Contact Us</h1>
        <p class="lead">We’d love to hear from you. Reach out to us with any questions or feedback.</p>
    </div>
</section>


<!-- Contact Form & Info Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg p-4">
                    <h2 class="mb-4 text-center fw-bold">Send Us a Message</h2>
                    <form action="{{ url('/contact-submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="yourname@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea name="message" class="form-control" id="message" rows="5" placeholder="Your message here..." required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold shadow">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg p-4 h-100">
                    <h2 class="mb-4 text-center fw-bold">Contact Info</h2>
                    <ul class="list-unstyled contact-info">
                        <li class="mb-3"><i class="bi bi-geo-alt-fill text-primary me-2"></i>
                            <strong>Address:</strong><br>
                            123 Laravel Street, Blade City, IN 12345
                        </li>
                        <li class="mb-3"><i class="bi bi-envelope-fill text-success me-2"></i>
                            <strong>Email:</strong><br>
                            support@insta-laravel.com
                        </li>
                        <li class="mb-3"><i class="bi bi-telephone-fill text-warning me-2"></i>
                            <strong>Phone:</strong><br>
                            +91 123-456-7890
                        </li>
                        <li class="mb-3"><i class="bi bi-clock-fill text-danger me-2"></i>
                            <strong>Working Hours:</strong><br>
                            Mon - Fri: 9:00 AM - 6:00 PM
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 text-center cta-contact">
    <div class="container">
        <h2 class="mb-3 fw-bold">📞 Need Help?</h2>
        <p class="mb-4 text-muted">Contact our support team anytime and get quick assistance.</p>
        <a href="{{ url('/demo') }}" class="btn btn-warning btn-lg fw-bold shadow">Join Our Platform</a>
    </div>
</section>

@endsection
