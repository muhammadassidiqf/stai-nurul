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
                                    <h1 class="display-4 text-light mb-5 animated slideInDown">KEMAHASISWAAN <br> STAI NURUL
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

    <!-- Team Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Beasiswa</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img"
                                src="{{ asset('') }}frontend/img/fahrul-azmi-5K549TS6F08-unsplash.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-outline-light border-2" href="">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Beasiswa A</h5>
                            <span>10 Mei 2023 - 10 Juni 2023</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img"
                                src="{{ asset('') }}frontend/img/hameed-ullah-eeI0al-Qx8k-unsplash.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-outline-light border-2" href="">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Beasiswa B</h5>
                            <span>10 Mei 2023 - 10 Juni 2023</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img"
                                src="{{ asset('') }}frontend/img/fahrul-azmi-gyKmF0vnfBs-unsplash.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-outline-light border-2" href="">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Beasiswa C</h5>
                            <span>10 Mei 2023 - 10 Juni 2023</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid team-img"
                                src="{{ asset('') }}frontend/img/fahrul-azmi-r4qheYoY8Qg-unsplash.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-outline-light border-2" href="">Read
                                    More</a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2">Beasiswa D</h5>
                            <span>10 Mei 2023 - 10 Juni 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Berita</h6>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($news as $n)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">News</div>
                                <h5 class="mb-3">{{ $n->judul }}</h5>
                                <?php
                                $string = strip_tags($n->isi);
                                if (strlen($string) > 100) {
                                    // truncate string
                                    $stringCut = substr($string, 0, 100);
                                    $endPoint = strrpos($stringCut, ' ');
                                
                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '...';
                                }
                                ?>
                                <p>
                                    {{ $string }}
                                </p>
                                <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i
                                            class="fa fa-signal text-primary me-2"></i>{{ $n->kategori }}
                                    </li>
                                    <li class="breadcrumb-item small"><i
                                            class="fa fa-calendar-alt text-primary me-2"></i>{{ \Carbon\Carbon::parse($n->created_at)->translatedFormat('d F Y') }}
                                    </li>
                                </ol>
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('') }}storage/img/berita/{{ $n->gambar }}"
                                    alt="">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-light border-2"
                                        href="{{ route('newsbySlug', $n->slug) }}">Read
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 my-6 wow fadeInUp mb-4" data-wow-delay="0.1s">
                    <div class="row g-4 text-center">
                        <div class="col-sm-12">
                            <a class="btn btn-primary py-3 px-5" href="">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Sambutan</h6>
                <h1 class="display-6 mb-4">Pimpinan</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="{{ asset('') }}frontend/img/ketua-yayasan.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Selamat datang di STAI Nurul Iman Bandung! Kami berkomitmen untuk memberikan
                                pendidikan bermutu dan inspiratif, dengan memadukan ilmu pengetahuan dan nilai-nilai
                                keislaman. Bergabunglah dengan kami dan raih masa depan gemilang bersama STAI Nurul Iman
                                Bandung! Terima kasih.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h6>DRS. KH. KHOERUDIN ALY</h6>
                            <span>KETUA YAYASAN</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="{{ asset('') }}frontend/img/ketua.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Selamat datang di STAI Nurul Iman Bandung! Kami berkomitmen untuk memberikan
                                pendidikan bermutu dan inspiratif, dengan memadukan ilmu pengetahuan dan nilai-nilai
                                keislaman. Bergabunglah dengan kami dan raih masa depan gemilang bersama STAI Nurul Iman
                                Bandung! Terima kasih.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>HASAN BASRI, MM</h5>
                            <span>KETUA</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto"
                                    src="{{ asset('') }}frontend/img/wk-1.png" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4">Selamat datang di STAI Nurul Iman Bandung! Kami berkomitmen untuk memberikan
                                pendidikan bermutu dan inspiratif, dengan memadukan ilmu pengetahuan dan nilai-nilai
                                keislaman. Bergabunglah dengan kami dan raih masa depan gemilang bersama STAI Nurul Iman
                                Bandung! Terima kasih.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5>DR. PEPEN SUPENDI</h5>
                            <span>WAKIL KETUA 1</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
