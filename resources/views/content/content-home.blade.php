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
                                    <h1 class="display-4 fw-bold mb-4 wow fadeInUp text-white" data-wow-delay="0.1s">
                                        STAINI Bandung <br /> (Sekolah Tinggi Agama Islam Nurul Iman)
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach ($prodi as $item)
                    <div class="carousel-item">
                        <img class="img-fluid img-header" src="{{ asset('storage/img/prodi/' . $item->gambar) }}"
                            alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 text-light mb-5 animated slideInDown">{{ $item->prodi }}</h1>
                                        <a href="{{ route('academic', $item->slug) }}"
                                            class="btn btn-primary py-sm-3 px-sm-5">Tentang</a>
                                        <a href="{{ route('admission') }}"
                                            class="btn btn-light py-sm-3 px-sm-5 ms-3">Pendaftaran</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="bg-primary shadow p-4 text-white wow fadeIn" data-wow-delay="0.4s">
                    <div class="d-flex flex-column flex-lg-row gap-4 align-items-center text-white"
                        style="text-align: justify !important;">
                        <div class="px-4 text-center flex-shrink-0">
                            <i class="fas fa-user-graduate" style="font-size: 6rem; color: #fff;"></i>
                        </div>
                        <div class="flex-grow-1 px-2">
                            Masuki lingkungan akademik baru di STAINI Bandung, di mana penerimaan tahun 2026 kini resmi
                            dibuka
                            untuk
                            calon Sarjana (S1) yang visioner. Ini adalah kesempatan Anda untuk bergabung dengan komunitas
                            yang
                            berorientasi global yang menjembatani nilai-nilai Islam dengan penelitian mutakhir. Dengan batas
                            waktu
                            Mei 2026, sekaranglah saatnya mengamankan masa depan Anda melalui program lintas disiplin yang
                            beragam,
                            dirancang untuk mencetak generasi emas 2045.
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('admission') }}" class="btn btn-gold py-2 px-3 wow fadeIn"
                            data-wow-delay="0.6s">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl my-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="position-relative overflow-hidden h-100" style="min-height:400px;">
                        <img class="img-fluid position-absolute w-100 h-100"
                            src="{{ asset('') }}frontend/img/image-pendirian.jpeg" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h-100 d-flex flex-column justify-content-center align-items-center">
                        <h6 class="text-primary text-uppercase mb-2">Tentang STAINI BANDUNG</h6>
                        <?php
                        $content = !empty($tentang->isi) ? strip_tags($tentang->isi) : 'Data tentang belum tersedia.';
                        if (strlen($content) > 300) {
                            $stringCut = substr($content, 0, 500);
                            $endPoint = strrpos($stringCut, ' ');
                            $content = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $content .= '...';
                        }
                        echo $content;
                        ?>
                        <div class="mt-4">
                            <a href="{{ route('about') }}" class="btn btn-primary py-2 px-4">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Courses Start -->
    <div class="container-xxl courses my-5 py-4 ">
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
                                    $stringCut = substr($string, 0, 100);
                                    $endPoint = strrpos($stringCut, ' ');
                                
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
                <div class="col-lg-12 my-4 wow fadeInUp" data-wow-delay="0.1s">
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


    <!-- Team Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Pimpinan</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative d-flex justify-content-center">
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
                        <div class="position-relative d-flex justify-content-center">
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
                        <div class="position-relative d-flex justify-content-center">
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
                        <div class="position-relative d-flex justify-content-center">
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
