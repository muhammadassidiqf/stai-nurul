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
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    {!! !!$data ? $data->isi : '' !!}
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 p-lg-4">
                    <x-list-right-sidebar-about></x-list-right-sidebar-about>
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
                            <img class="img-fluid team-img" src="{{ asset('frontend/img/ketua-yayasan.png') }}"
                                alt="">
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
                            <h6 class="mt-2">DRS. KH. KHOERUDIN ALY</h6>
                            <span>KETUA YAYASAN</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="{{ asset('frontend/img/ketua.png') }}" alt="">
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
                            <h6 class="mt-2">HASAN BASRI, MM</h6>
                            <span>KETUA</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="{{ asset('frontend/img/wk-1.png') }}" alt="">
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
                            <h6 class="mt-2">DR. PEPEN SUPENDI</h6>
                            <span>WAKIL KETUA 1</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img" src="{{ asset('frontend/img/wk-2.png') }}" alt="">
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
                            <h6 class="mt-2">DR. PALAH, M.PD</h6>
                            <span>WAKIL KETUA 2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
