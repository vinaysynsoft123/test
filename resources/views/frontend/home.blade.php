@extends('frontend.layouts.main')

@section('title', 'Home')

@section('content')

<!-- Banner Slider -->
<div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active position-relative">
            <img src="{{ asset('images/what-is-banner.webp') }}" class="d-block w-100" height="500" alt="Banner 1">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-4 fw-bold">Welcome to Insta-Laravel</h1>
                <p class="lead">Build your social platform easily with Blade templates.</p>
                <a href="{{ url('/demo') }}" class="btn btn-lg btn-warning fw-bold mt-3">🚀 Register for Free Demo</a>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" height="500" alt="Banner 2">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-5 fw-bold">Share Your Ideas</h1>
                <p class="lead">Create posts, like and comment with your friends.</p>
            </div>
        </div>
        <div class="carousel-item position-relative">
            <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" height="500" alt="Banner 3">
            <div class="carousel-overlay"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h1 class="display-5 fw-bold">Connect with Community</h1>
                <p class="lead">Follow users and explore amazing content.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Hero Section -->
<section class="hero-section text-center text-black
 d-flex align-items-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Master Insta-Laravel with Confidence</h1>
        <p class="lead">Interactive classes, expert trainers, and real-time practice sessions</p>
        <a href="{{ url('/demo') }}" class="btn btn-lg btn-light fw-bold shadow">Join Free Demo</a>
    </div>
</section>

<!-- Features Section -->
<section class="container py-5 text-center">
    <h2 class="fw-bold mb-5">🔥 Our Features</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow feature-card h-100 border-0">
                <div class="card-body">
                    <div class="icon-box bg-primary text-white mb-3"><i class="bi bi-pencil-square"></i></div>
                    <h5 class="card-title">Create Posts</h5>
                    <p class="card-text">Share your thoughts and ideas with the community.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow feature-card h-100 border-0">
                <div class="card-body">
                    <div class="icon-box bg-success text-white mb-3"><i class="bi bi-chat-dots"></i></div>
                    <h5 class="card-title">Like & Comment</h5>
                    <p class="card-text">Engage with posts and connect with others.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow feature-card h-100 border-0">
                <div class="card-body">
                    <div class="icon-box bg-danger text-white mb-3"><i class="bi bi-person-circle"></i></div>
                    <h5 class="card-title">User Profiles</h5>
                    <p class="card-text">Manage your profile and follow other users.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="fw-bold">About Insta-Laravel</h2>
        <p class="mt-3 mx-auto" style="max-width: 700px;">
            Insta-Laravel is a fully Blade-based Laravel frontend template.
            Perfect for social platforms, blogs, and beginner-friendly projects.
        </p>
    </div>
</section>
<!-- Statistics Section --><!-- Statistics Section -->
<section class="stats-section py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-dark">📊 Our Achievements</h2>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="stat-box p-4 shadow-sm rounded bg-white">
                    <div class="icon-box bg-primary text-white mb-3">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h3 class="counter text-primary" data-target="10">0</h3>
                    <p class="mb-0 text-muted">Years of Experience</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box p-4 shadow-sm rounded bg-white">
                    <div class="icon-box bg-success text-white mb-3">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h3 class="counter text-success" data-target="5000">0</h3>
                    <p class="mb-0 text-muted">Students Trained</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box p-4 shadow-sm rounded bg-white">
                    <div class="icon-box bg-warning text-white mb-3">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h3 class="counter text-warning" data-target="10">0</h3>
                    <p class="mb-0 text-muted">Cities Reached</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-box p-4 shadow-sm rounded bg-white">
                    <div class="icon-box bg-danger text-white mb-3">
                        <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h3 class="counter text-danger" data-target="200">0</h3>
                    <p class="mb-0 text-muted">Active Users</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        const speed = 200;

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText;
                    const inc = Math.ceil(target / speed);

                    if (count < target) {
                        counter.innerText = count + inc;
                        setTimeout(updateCount, 40);
                    } else {
                        counter.innerText = target + "+";
                    }
                };
                updateCount();
            });
        };

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector(".stats-section"));
    });
</script>



<!-- Counter Animation Script -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        const speed = 200; // lower = faster

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText;

                    // Increment
                    const inc = Math.ceil(target / speed);

                    if (count < target) {
                        counter.innerText = count + inc;
                        setTimeout(updateCount, 40);
                    } else {
                        counter.innerText = target + "+";
                    }
                };
                updateCount();
            });
        };

        // Run animation when section is in view
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector(".stats-section"));
    });
</script>



<!-- Testimonials Section -->
<section class="py-5 bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">🌟 What Our Users Say</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted fst-italic">"Insta-Laravel made my first Laravel project so much easier. The structure is clean and modern!"</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/50?img=1" class="rounded-circle me-3" alt="user1">
                        <div>
                            <h6 class="mb-0">Amit Sharma</h6>
                            <small class="text-muted">Fullstack Developer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted fst-italic">"Loved the hero section design! My website looks professional and engaging now."</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/50?img=2" class="rounded-circle me-3" alt="user2">
                        <div>
                            <h6 class="mb-0">Sneha Kapoor</h6>
                            <small class="text-muted">UI/UX Designer</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 h-100">
                    <p class="text-muted fst-italic">"Best Laravel starter kit for beginners. Great UI and easy to customize."</p>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://i.pravatar.cc/50?img=3" class="rounded-circle me-3" alt="user3">
                        <div>
                            <h6 class="mb-0">Rahul Verma</h6>
                            <small class="text-muted">Student</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".counter");
        const speed = 200; // lower = faster

        const animateCounters = () => {
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText;

                    // Increment
                    const inc = Math.ceil(target / speed);

                    if (count < target) {
                        counter.innerText = count + inc;
                        setTimeout(updateCount, 40);
                    } else {
                        counter.innerText = target + "+";
                    }
                };
                updateCount();
            });
        };

        // Run animation when section is in view
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.disconnect();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(document.querySelector(".stats-section"));
    });
</script>
