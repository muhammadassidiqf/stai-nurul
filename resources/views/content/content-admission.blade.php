@extends('layouts.app-home')
@section('content-home')
    <!-- Hero Section Start -->
    <div class="container-fluid header-bg position-relative p-0">
        <div class="d-flex align-items-center justify-content-center"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.663), rgba(0, 0, 0, 0.673)), url('{{ asset('frontend/img/campus1.jpg') }}'); background-size: cover; background-position: center; height: 60vh;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-4 fw-bold mb-4 wow fadeInUp text-white" data-wow-delay="0.1s">
                            Sekolah Tinggi Agama Islam Nurul Iman (STAINI) Bandung
                        </h1>
                        <h2 class="h3 mb-4 wow fadeInUp text-white" data-wow-delay="0.2s">
                            Penerimaan Mahasiswa Baru untuk Tahun Akademik 2026/2027
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-white p-5 rounded shadow-sm mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="lead mb-4" style="line-height: 1.8; color: #444;">
                            STAINI Bandung Tahun Akademik 2026/2027 memberikan kesempatan kepada calon mahasiswa untuk
                            memperoleh pengalaman akademik yang berkualitas berorientasi pada pengembangan keilmuan serta
                            karakter. Bacalah informasi di bawah ini untuk mengetahui lebih lanjut tentang program dan
                            persyaratannya.
                        </p>

                        <h4 class="fw-bold mb-4" style="color: #2B5B84;">
                            Biaya kuliah untuk Tahun Akademik 2026/2027:
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-unstyled">
                                    <li class="mb-3 p-3"
                                        style="background-color: #f1f5f9; border-left: 4px solid #2B5B84; border-radius: 0 5px 5px 0;">
                                        <strong>1. Program Sarjana (S1) Pendidikan Agama Islam:</strong>
                                        <span class="text-primary fw-bold">Rp 2.950.000</span> per semester
                                    </li>
                                    <li class="mb-3 p-3"
                                        style="background-color: #f1f5f9; border-left: 4px solid #2B5B84; border-radius: 0 5px 5px 0;">
                                        <strong>2. Program Sarjana (S1) Pendidikan Bahasa Arab:</strong>
                                        <span class="text-primary fw-bold">Rp 2.950.000</span> per semester
                                    </li>
                                    <li class="mb-3 p-3"
                                        style="background-color: #f1f5f9; border-left: 4px solid #2B5B84; border-radius: 0 5px 5px 0;">
                                        <strong>3. Program Sarjana (S1) Manajemen Pendidikan Islam:</strong>
                                        <span class="text-primary fw-bold">Rp 2.950.000</span> per semester
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row g-4 mb-5">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-5">
                                    <div class="mb-4">
                                        <i class="fas fa-graduation-cap" style="font-size: 4rem; color: #2B5B84;"></i>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3" style="color: #2B5B84;">
                                        Kualifikasi Akademik
                                    </h5>
                                    <p class="card-text">
                                        Persyaratan pendaftaran dan kualifikasi akademik yang harus dipenuhi calon mahasiswa
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 text-center pb-3">
                                    <a href="#" class="btn btn-outline-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-5">
                                    <div class="mb-4">
                                        <i class="fas fa-university" style="font-size: 4rem; color: #2B5B84;"></i>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3" style="color: #2B5B84;">
                                        Program Studi
                                    </h5>
                                    <p class="card-text">
                                        Fakultas dan program studi yang tersedia di STAINI Bandung beserta kurikulumnya
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 text-center pb-3">
                                    <a href="#prodi" class="btn btn-outline-primary">Lihat Program Studi</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-5">
                                    <div class="mb-4">
                                        <i class="fas fa-question-circle" style="font-size: 4rem; color: #2B5B84;"></i>
                                    </div>
                                    <h5 class="card-title fw-bold mb-3" style="color: #2B5B84;">
                                        Panduan
                                    </h5>
                                    <p class="card-text">
                                        Panduan lengkap proses pendaftaran, pembayaran, dan tahapan seleksi mahasiswa baru
                                    </p>
                                </div>
                                <div class="card-footer bg-transparent border-0 text-center pb-3">
                                    <a href="#" class="btn btn-outline-primary">Lihat Panduan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5" id="prodi">
        <div class="container">
            <div class="text-center max-width-600 mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-5 mb-4"><span class="text-primary">Program Studi</span> STAINI Bandung</h2>
                <p class="lead">Pilih program studi yang sesuai dengan minat dan bakat Anda</p>
            </div>

            <div class="row g-4">
                @foreach ($prodi as $program)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration + 1 }}s">
                        <div class="card h-100 border shadow-sm">
                            <img src="{{ asset('storage/img/prodi/' . $program->gambar) }}" class="card-img-top"
                                alt="{{ $program->prodi }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body p-4">
                                <h5 class="card-title fw-bold text-primary">{{ $program->prodi }}</h5>
                                <p class="card-text">{{ Str::limit(strip_tags($program->isi), 100) }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 text-center pb-3">
                                <a href="{{ route('academic', $program->slug) }}" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Programs Section End -->
@endsection
