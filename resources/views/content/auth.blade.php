@extends('layouts.app-auth')
@section('content-auth')
    <div class="card">
        <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
                <a href="" class="app-brand-link gap-2">
                    <img src="{{ asset('frontend/img/stai-logo.png') }}" class="app-brand-logo demo" alt="">
                    <span class="app-brand-text demo h3 mb-0 fw-bold">Login</span>
                </a>
            </div>
            <!-- /Logo -->

            <form class="mb-3" action="{{ route('ceklogin') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username"
                        placeholder="Enter your username" autofocus />
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div class="input-group input-group-merge">
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
