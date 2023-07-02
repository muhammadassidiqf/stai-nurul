<!-- Topbar Start -->
<div class="container-fluid bg-gold text-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-white me-2"></small>
                <small>Jl Raya Cibaduyut, Bandung</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-clock text-white me-2"></small>
                <small>Senin - Jumat : 09.00 - 16.00 WIB</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-white me-2"></small>
                <small>+62 811132019</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square rounded-0 border-0 border-end border-light text-white" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-0 border-0 border-end border-light text-white" href=""><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-0 border-0 border-end border-light text-white" href=""><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-square rounded-0 text-white" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-xl bg-white navbar-light border-bottom border-black sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5"><img
            src="{{ asset('frontend/img/stai-logo.png') }}" class="img-logo" alt=""> <span
            class="fw-bolder text-primary">STAI
            NURUL
            IMAN</span>

    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto m-mobile">

            {{-- <a href="{{ route('home') }}" class="nav-item nav-link  active">Home</a> --}}
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Tentang Stai
                    Nurul Iman</a>
                <ul class="dropdown-menu m-0">
                    <li><a class="dropdown-item" href="{{ route('about') }}">Tentang</a></li>
                    <li><a class="dropdown-item" href="{{ route('history') }}">Sejarah</a></li>
                    <li><a class="dropdown-item" href="{{ route('visi_misi') }}">Visi Misi</a></li>
                    <li><a class="dropdown-item" href="">Struktur Organisasi</a></li>
                </ul>
            </li>
            <a href="{{ route('students') }}" class="nav-item nav-link">Kemahasiswaan</a>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Akademik</a>
                <ul class="dropdown-menu m-0">
                    @foreach ($prodi as $item)
                        <li><a class="dropdown-item" href="{{ route('academic', $item->slug) }}">Prodi
                                {{ $item->prodi }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Media</a>
                <ul class="dropdown-menu m-0">
                    <li><a class="dropdown-item" href="">Features</a></li>
                    <li><a class="dropdown-item" href="">Appointment</a></li>
                </ul>
            </li>
            <a href="contact.html" class="nav-item nav-link">Contact</a>
            <a href="" class="btn btn-primary text-sm-start py-4 d-none d-md-none d-lg-block">Pendaftaran<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
