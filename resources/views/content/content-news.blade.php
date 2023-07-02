@extends('layouts.app-home')
@section('content-home')
    <style>
        figure img {
            object-fit: cover;
            max-width: 100%;
        }
    </style>
    <!-- Carousel Start -->
    <div class="container-fluid d-flex align-items-center justify-content-center p-0 wow fadeInUp" data-wow-delay="0.1s"
        style="min-height: 80vh;background: linear-gradient(rgba(255, 255, 255, 0.561), rgba(255, 255, 255, 0.554)), url('{{ asset('storage/img/berita/' . $news->gambar) }}') center center no-repeat;background-attachment: fixed; background-size: cover;">
        <h1 class="display-4 mb-5  slideInDown"> {{ $news->judul }}
        </h1>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-8 wow fadeInLeft" data-wow-delay="0.1s">
                    {!! $news->isi !!}
                </div>
                <div class="col-md-3 wow fadeInRight" data-wow-delay="0.1s">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                    </div>
                    @foreach ($popular as $p)
                        <a class="row pb-3" href="{{ route('newsbySlug', $p->slug) }}">
                            <div class="col-5 align-self-center">
                                <img src="{{ asset('') }}storage/img/berita/{{ $p->gambar }}" alt="img"
                                    class="img-fluid" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> {{ $p->judul }}
                                </div>
                                <div class="most_fh5co_treding_font_123">
                                    {{ \Carbon\Carbon::parse($p->created_at)->translatedFormat('d F Y') }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
