@extends('frontend.layouts.main')

@section('title', 'About Us')

@section('content')
<!-- Hero Section -->
<section class="py-5 text-center mt-5" style="background-color: #e9ebee;">
    <div class="container">
        <h1 class="display-5 fw-bold">About Insta-Laravel</h1>
        <p class="lead text-muted">Learn more about our mission, vision, and team.</p>
    </div>
</section>

<!-- About Content Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center gy-4">
            <div class="col-md-6">
                <img src="https://media.istockphoto.com/id/1163589059/photo/about-us.jpg?s=612x612&w=0&k=20&c=xiAumkYaKpQc3xepslDpn-lFhYPae6ivX_rRkgSXJgs=" 
                     class="img-fluid rounded shadow-lg" alt="About Image">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3 fw-bold"><i class="bi bi-bullseye text-primary"></i> Our Mission</h2>
                <p class="mb-4">
                    Insta-Laravel is built to provide a simple, clean, and responsive Laravel Blade template for developers.
                    Our goal is to make it easy for anyone to start building social platforms, blogs, or community websites.
                </p>
                <h3 class="mb-3 fw-bold"><i class="bi bi-lightbulb-fill text-warning"></i> Our Vision</h3>
                <p>
                    To become the go-to starter template for Laravel developers who want a fully functional frontend and backend using Blade.
                    We focus on simplicity, performance, and mobile responsiveness.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container text-center">
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <i class="bi bi-briefcase-fill display-5"></i>
                <h3 class="fw-bold mt-2">10+ Years</h3>
                <p>Experience</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-people-fill display-5"></i>
                <h3 class="fw-bold mt-2">5000+</h3>
                <p>Students</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-geo-alt-fill display-5"></i>
                <h3 class="fw-bold mt-2">10+</h3>
                <p>Cities</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-activity display-5"></i>
                <h3 class="fw-bold mt-2">200+</h3>
                <p>Active Users</p>
            </div>
        </div>
    </div>
</section>


<section class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center fw-bold">🚀 Founder’s Journey</h2>
        <ul class="timeline list-unstyled position-relative mx-auto" style="max-width: 700px;">
            <!-- Timeline Item -->
            <li class="mb-5 position-relative">
                <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"></div>
                <div class="timeline-content bg-white p-4 shadow rounded position-relative" style="width: 90%; margin-left: auto; margin-right: auto;">
                    <h5 class="fw-bold">2015 - Started Career</h5>
                    <p class="text-muted mb-0">Vinay began his journey as a junior developer, learning Laravel and frontend technologies.</p>
                </div>
            </li>
            <li class="mb-5 position-relative">
                <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"></div>
                <div class="timeline-content bg-white p-4 shadow rounded position-relative" style="width: 90%; margin-left: auto; margin-right: auto;">
                    <h5 class="fw-bold">2017 - First Startup</h5>
                    <p class="text-muted mb-0">Founded his first tech startup, focusing on web development services for SMEs.</p>
                </div>
            </li>
            <li class="mb-5 position-relative">
                <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"></div>
                <div class="timeline-content bg-white p-4 shadow rounded position-relative" style="width: 90%; margin-left: auto; margin-right: auto;">
                    <h5 class="fw-bold">2020 - Insta-Laravel Launch</h5>
                    <p class="text-muted mb-0">Launched Insta-Laravel, a clean and responsive Blade template to help Laravel developers.</p>
                </div>
            </li>
            <li class="mb-5 position-relative">
                <div class="timeline-dot bg-primary position-absolute start-50 translate-middle rounded-circle"></div>
                <div class="timeline-content bg-white p-4 shadow rounded position-relative" style="width: 90%; margin-left: auto; margin-right: auto;">
                    <h5 class="fw-bold">2025 - Expanding Team</h5>
                    <p class="text-muted mb-0">Now leading a talented team, Vinay continues to mentor and build professional web solutions.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 text-center cta-section">
    <div class="container">
        <h2 class="mb-3 fw-bold">🚀 Join Us Today</h2>
        <p class="mb-4 text-muted">Start building your social platform or blog with Insta-Laravel Blade template.</p>
        <a href="{{ url('/register') }}" class="btn btn-lg btn-warning fw-bold shadow">Get Started</a>
    </div>
</section>


@endsection
