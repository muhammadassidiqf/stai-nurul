@extends('layouts.app-home')
@section('content-home')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid img-header" src="{{ asset('frontend/img/campus1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-4 text-light mb-5 animated slideInDown">AKADEMIK <br> STAI NURUL
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
    <div class="container-xl p-4 bg-white mt-4">
        <div class="row m-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row gx-3">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="ps-4">
                                    <p>Program Studi Bahasa Arab</p>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="ps-4">
                                    <p>Program Studi Ekonomi Islam</p>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="ps-4">
                                    <p>Program Studi Pendidikan
                                        Agama
                                        Islam</p>
                                    <span>Clita erat ipsum lorem sit sed stet duo justo erat amet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl p-4 bg-white mt-4">
        <div class="row m-2">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="row gx-3">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="h-100">
                                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam
                                        et eos.
                                        Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat
                                        amet
                                    </p>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                                        diam
                                        amet
                                        diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo
                                        justo magna
                                        dolore erat amet</p>
                                </div>
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="position-relative">
                                    <img class="img-fluid" src="{{ asset('') }}frontend/img/about-campus.jpg"
                                        alt="" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
