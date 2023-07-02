@extends('layouts.app-home')
@section('content-home')
    <div class="container-xl p-4 bg-white">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-12 p-lg-4">
                        {!! !!$data ? $data->isi : '' !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 p-lg-4">
                <x-list-right-sidebar-about></x-list-right-sidebar-about>
            </div>
        </div>

    </div>
@endsection
