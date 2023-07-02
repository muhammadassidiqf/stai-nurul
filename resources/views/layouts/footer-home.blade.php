<!-- Footer Start -->
<div class="container-fluid bg-primary text-light footer my-6 mb-0 py-6 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl Raya Cibaduyut, Bandung</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 811132019</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>stainuruliman@gmail.com</p>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Tentang</h4>
                <a class="btn btn-link" href="{{ route('about') }}">Tentang Stai Nurul Iman</a>
                <a class="btn btn-link" href="{{ route('history') }}">Sejarah</a>
                <a class="btn btn-link" href="{{ route('visi_misi') }}">Visi Misi</a>
                <a class="btn btn-link" href="{{ route('struktur_organisasi') }}">Struktur Organisasi</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h4 class="text-light mb-4">Akademik</h4>
                @foreach ($prodi as $item)
                    <a class="btn btn-link" href=" href="{{ route('academic', $item->slug) }}">
                        {{ $item->prodi }}</a>
                @endforeach
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                        <button class="btn btn-light">Sign Up</button>
                    </div>
                </form>
                <h6 class="text-white mt-4 mb-3">Follow Us</h6>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light me-1" href=""><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light me-0" href=""><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid bg-gold copyright text-light py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a href="#">STAI NURUL IMANI</a>, All Right Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                Designed By <a href="">Team</a>
                <br>Distributed By: <a href="" target="_blank">TEAM IT</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
