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
                                    <h1 class="display-4 text-light mb-5 animated slideInDown">DOSEN <br> STAI NURUL
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
                <h1 class="display-6 mb-4">Dosen & Tenaga Pengajar</h1>
                <p class="mb-0">Dosen-dosen berkualitas dan berpengalaman di bidangnya yang siap membimbing mahasiswa
                    mencapai prestasi akademik terbaik.</p>
            </div>
            <div class="row g-4">
                @forelse($dosen as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item position-relative h-100">
                            <div class="position-relative">
                                <img class="img-fluid team-img" src="{{ asset('storage/img/dosen/' . $item->gambar) }}"
                                    alt="{{ $item->nama }}" style="height: 300px; object-fit: cover; width: 100%;">
                                <div class="team-social text-center">
                                    <a class="btn btn-outline-light border-2" href="#" data-bs-toggle="modal"
                                        data-bs-target="#dosenModal{{ $item->id }}">
                                        Lihat Detail
                                    </a>
                                </div>
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">{{ $item->nama }}</h5>
                                <span class="text-primary d-block mb-1">{{ $item->jabatan }}</span>
                                <small class="text-muted">{{ $item->keahlian }}</small>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Detail Dosen -->
                    <div class="modal fade" id="dosenModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="dosenModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dosenModalLabel{{ $item->id }}">Detail Dosen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4 text-center">
                                            <img class="img-fluid rounded"
                                                src="{{ asset('storage/img/dosen/' . $item->gambar) }}"
                                                alt="{{ $item->nama }}" style="max-height: 300px; object-fit: cover;">
                                        </div>
                                        <div class="col-md-8">
                                            <h4>{{ $item->nama }}</h4>
                                            <hr>
                                            <div class="mb-3">
                                                <strong>Jabatan:</strong>
                                                <p class="mb-0">{{ $item->jabatan }}</p>
                                            </div>
                                            <div class="mb-3">
                                                <strong>Bidang Keahlian:</strong>
                                                <p class="mb-0">{{ $item->keahlian }}</p>
                                            </div>
                                            @if ($item->prodi)
                                                <div class="mb-3">
                                                    <strong>Program Studi:</strong>
                                                    <p class="mb-0">{{ $item->prodi->prodi }}</p>
                                                </div>
                                            @endif
                                            @if ($item->studi)
                                                <div class="mb-3">
                                                    <strong>Riwayat Pendidikan:</strong>
                                                    @php
                                                        $pendidikan = explode(',', $item->studi);
                                                    @endphp
                                                    <ul class="mb-0">
                                                        @foreach ($pendidikan as $p)
                                                            <li>{{ trim($p) }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info text-center" role="alert">
                            Belum ada data dosen yang tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Team End -->
@endsection
