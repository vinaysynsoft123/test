<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Insta-Laravel')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS -->
 
    <link rel="stylesheet" href="{{ asset('asset/main.css') }}">
    
</head>
<body>

<!-- Header -->
<header>
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-white" href="{{ url('/') }}"> <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="Insta-Laravel" style="max-width: 40px;">     Insta-Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/') }}">Home</a></li>                 
                    <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                       <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/demo') }}">Demo</a></li>
                    <li class="nav-item mx-2"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                <a href="{{ url('/demo') }}" class="btn btn-primary ms-lg-3 shadow-sm">Enroll Now</a>
            </div>
        </div>
    </nav>
</header>


<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="footer bg-dark text-light pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row gy-4">
            <!-- About -->
            <div class="col-md-4">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid mb-3" alt="Insta-Laravel" style="max-width: 120px;">
                <h5 class="text-white fw-bold">About Insta-Laravel</h5>
                <p class="small text-muted">
                    We provide professional Spoken English classes with interactive sessions for all levels. 
                    Learn confidently and improve your communication skills.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <h5 class="text-white fw-bold">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>                
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/demo') }}">Demo</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4">
                <h5 class="text-white fw-bold">Contact</h5>
                <p class="small mb-1"><i class="bi bi-envelope-fill me-2 text-primary"></i>support@insta-laravel.com</p>
                <p class="small mb-1"><i class="bi bi-telephone-fill me-2 text-success"></i>+91 123-456-7890</p>
                <p class="small mb-2"><i class="bi bi-geo-alt-fill me-2 text-warning"></i>123 Laravel Street, Blade City, IN</p>
                <div class="social-icons mt-2">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        <hr class="bg-secondary my-4">

        <p class="text-center small mb-0">&copy; {{ date('Y') }} Insta-Laravel. All Rights Reserved.</p>
    </div>
</footer>





<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Add shadow when scrolling
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) navbar.classList.add('scrolled');
        else navbar.classList.remove('scrolled');
    });
</script>

</body>
</html>
