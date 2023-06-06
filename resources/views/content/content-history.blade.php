@extends('layouts.app-home')
@section('content-home')
    <div class="container-xl p-4 bg-white">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 p-lg-4">
                        {!! $data->isi !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-lg-4">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">Tentang</a>
                    <a href="#" class="list-group-item list-group-item-action">Sejarah</a>
                    <a href="#" class="list-group-item list-group-item-action">Visi Misi</a>
                    <a href="#" class="list-group-item list-group-item-action">Struktur Organisasi</a>
                </div>
            </div>
        </div>

    </div>
@endsection
