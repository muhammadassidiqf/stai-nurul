@extends('layouts.app-home')
@section('content-home')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid img-header" src="{{ asset('frontend/img/campus1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xl p-4 bg-white container-profile">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid profile-img rounded my-4" src="{{ asset('frontend/img/team-1.jpg') }}"
                                alt="User avatar">
                            {{-- <div class="user-info text-center">
                                <h5 class="mb-2">Muhammad Assidiq Fattah</h5>
                                <span class="badge bg-label-secondary">Lecturer</span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6 p-lg-4">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <h5>Muhammad Assidiq Fattah</h5>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Kelompok Keahlian</label>
                                <label class="col-sm-6 col-form-label" for="basic-default-name">Fiqih</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Fakultas/Prodi</label>
                                <label class="col-sm-6 col-form-label" for="basic-default-name">Pendidikan Agama
                                    Islam</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Jabatan Fungsional</label>
                                <label class="col-sm-8 col-form-label" for="basic-default-name">Asisten Ahli</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 team-items">
                    <div class="col-lg-12 col-md-12 p-lg-4 ms-lg-3">
                        <div class="col-md position-relative">
                            <h5>S1</h5>
                            <p for="floatingInputGrid">UIN Sunan Gunung Djati</p>
                            <p for="floatingInputGrid">2004</p>
                        </div>
                        <div class="col-md position-relative ">
                            <h5>S2</h5>
                            <p for="floatingInputGrid">UIN Sunan Gunung Djati</p>
                            <p for="floatingInputGrid">2008</p>
                        </div>
                        <div class="col-md position-relative ">
                            <h5>S3</h5>
                            <p for="floatingInputGrid">UIN Sunan Gunung Djati</p>
                            <p for="floatingInputGrid">2015</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header border-bottom">
                                <ul class="nav nav-tabs card-header-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" data-bs-toggle="tab"
                                            data-bs-target="#form-tabs-personal" role="tab" aria-selected="true">
                                            Project
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account"
                                            role="tab" aria-selected="false" tabindex="-1">
                                            Publikasi
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social"
                                            role="tab" aria-selected="false" tabindex="-1">
                                            HKI
                                        </button>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <!-- Personal Info -->
                                <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                                    <div class="row p-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                <li class="list-group-item">A fourth item</li>
                                                <li class="list-group-item">And a fifth one</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Account Details -->
                                <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                                    <div class="row p-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                <li class="list-group-item">A fourth item</li>
                                                <li class="list-group-item">And a fifth one</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Social Links -->
                                <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                                    <div class="row p-3">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">An item</li>
                                                <li class="list-group-item">A second item</li>
                                                <li class="list-group-item">A third item</li>
                                                <li class="list-group-item">A fourth item</li>
                                                <li class="list-group-item">And a fifth one</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-lg-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fifth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A sixth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fifth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A sixth link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
                    <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
                </div>
            </div>
        </div>

    </div>
@endsection
