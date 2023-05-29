@extends('layouts.app-home')
@section('content-home')
    <div class="container-xl p-4 bg-white">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 p-lg-4">
                        <div class="h-100">
                            <h1 class="display-6 mb-4">Sejarah</h1>
                            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                            </p>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                                diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna
                                dolore erat amet</p>
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('') }}frontend/img/about-campus.jpg" alt=""
                                    style="object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-lg-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Sejarah</a>
                    <a href="#" class="list-group-item list-group-item-action">Visi Misi</a>
                    <a href="#" class="list-group-item list-group-item-action">Pimpinan</a>
                </div>
            </div>
        </div>

    </div>
@endsection
