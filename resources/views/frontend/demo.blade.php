@extends('frontend.layouts.main')

@section('title', 'Spoken English Class')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center mt-5" style="background-color: #f1f8ff;">
    <div class="container">
        <h1>Welcome to Our Spoken English Class</h1>
        <p class="lead">Learn English confidently with our expert trainers and interactive classes.</p>
        <a href="#registration-form" class="btn btn-primary btn-lg mt-3">Enroll Now</a>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">📘 About Our Class</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="https://media.istockphoto.com/id/1163589059/photo/about-us.jpg?s=612x612&w=0&k=20&c=xiAumkYaKpQc3xepslDpn-lFhYPae6ivX_rRkgSXJgs=" 
                     class="img-fluid rounded shadow" alt="Spoken English Class">
            </div>
            <div class="col-md-6">
                <p class="mb-4">
                    Our Spoken English program is designed to help students of all levels become fluent, confident, and clear speakers of English. 
                    With personalized coaching, real-time practice, and modern teaching methods, learning becomes fun and impactful.
                </p>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary"></i> Beginner to Advanced Level Classes</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> Interactive Group Sessions & Live Practice</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-warning"></i> Experienced Trainers & Personalized Attention</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-danger"></i> Flexible Online & Offline Options</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form -->
<section id="registration-form" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">📝 Register for a Free Demo</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="card shadow border-0 p-4">
                    <form action="{{ url('/submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label fw-semibold">Phone / Mobile</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label fw-semibold">Class Interested In</label>
                            <select name="class" class="form-select" id="class" required>
                                <option value="">Select Class</option>
                                <option value="Beginner">Beginner</option>
                                <option value="Intermediate">Intermediate</option>
                                <option value="Advanced">Advanced</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-semibold">Message / Questions</label>
                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Any message or questions"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">Submit Registration</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
