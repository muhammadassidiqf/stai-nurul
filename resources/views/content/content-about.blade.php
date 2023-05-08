@extends('layouts.app-home')
@section('content-home')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid img-header" src="{{ asset('frontend/img/campus1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-4 text-light mb-5 animated slideInDown">TENTANG <br> STAI NURUL
                                        IMAN
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4 text-center">STAI NURUL IMAN</h1>
                        <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                            Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                        </p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                            dolore erat amet</p>
                        <div class="row g-4">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <a class="btn btn-primary py-3 px-5 m-2" href="">Pendaftaran</a>
                                <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2 m-2"
                                    href="tel:+0123456789">
                                    <span class="flex-shrink-0 btn-square bg-primary">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </span>
                                    <span class="px-3">+012 345 6789</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Pimpinan</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-outline-light border-2 m-1" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Full Name</h5>
                            <span>Lecturer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
