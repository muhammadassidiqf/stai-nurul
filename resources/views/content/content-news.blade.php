@extends('layouts.app-home')
@section('content-home')
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
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                class="fh5co_most_trading" /></div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.</div>
                            <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
