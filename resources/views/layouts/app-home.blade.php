<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STAI NURUL IMAN - BANDUNG</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description"
        content="STAI Nurul Iman Bandung - Sekolah Tinggi Agama Islam terbaik di Bandung. Informasi tentang STAI Nurul Iman, program studi, pendaftaran, dan berita terbaru." />
    <meta name="keywords"
        content="stai nurul iman, stai nurul iman bandung, staini bandung, sekolah tinggi agama islam, kampus islam bandung, pendaftaran stai nurul iman" />

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/staini-logo.png') }}" rel="icon">
    @section('styles')
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    @show

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    @include('layouts.navbar-home')

    @yield('content-home')

    @include('layouts.footer-home')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    @section('scripts')
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    @show
</body>

</html>
