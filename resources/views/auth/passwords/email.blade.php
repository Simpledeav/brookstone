@extends('layouts.user.auth')

@section('title', '| Reset password')

@section('content')

<div class="container">
    <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
            <div class="rounded my-4 bg-white basic-page">
                <div class="basicpage-border"></div>
                <div class="basicpage-border1"></div>
                <div class="card-body p-5">
                    <div class="mb-3 d-flex justify-content-center"> 
                        <a href="index.html"> 
                            <img width="150" src="https://cdn.prod.website-files.com/60f88e4b0ddb8e1d95163233/60f89753ce8105038912ef68_brookstone_logoFULL_2021.svg" alt="logo" class="desktop-logo"> 
                            <img src="../assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> 
                        </a> 
                    </div>
                    <p class="h4 fw-semibold mb-2 text-center fs-16 mb-6">Forgot Password</p>
                    <!-- <p class="mb-4 text-muted fw-normal text-center">Welcome back !</p> -->
                    @if (session('status'))
                        <div class="alert alert-fill-danger">
                            <i data-feather="alert-circle" class="mr-2"></i>
                            <strong class="small">{{ session('status') }}</strong>
                        </div>
                    @endif
                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <label for="signin-username" class="form-label text-default">Email address</label>
                                <input name="email" type="text" class="form-control" id="signin-username" placeholder="Enter email...">
                                @error('email')
                                    <span class="text-danger">
                                        <i class="fe fe-info fs-5 mx-1"></i><strong class="fs-10">{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                    </form>
                    <div class="text-center">
                        <p class="text-muted mt-3 mb-0">Back to Sign in ? <a href="{{ route('login') }}" class="text-primary">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
