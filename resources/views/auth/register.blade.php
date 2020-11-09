@extends('layouts.master-without-nav')

@section('title')
Register
@endsection

@section('body')

<body>
    @endsection

    @section('content')

    <!-- <div class="home-btn d-none d-sm-block">
        <a href="{{ url('index') }}" class="text-dark"><i class="fas fa-home h2"></i></a>
    </div> -->
    <div class="account-pages my-2 pt-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Free Register</h5>

                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="{{ url('index') }}">
                                    <div class="avatar-md profile-user-wid mb-1">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="50">
                                        </span>
                                    </div>
                                </a>
                            </div>

                            <div class="p-1">
                                <form method="POST" class="form-horizontal mt-1"

                                    action="{{ route('register') }}" enctype="multipart/form-data">

                                    
                                    @csrf

                                
                                    <div class="form-group">

                                        <label for="useremail">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" id="useremail" name="email"
                                            placeholder="Enter email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            value="{{ old('username') }}" name="username"
                                            id="username" placeholder="Enter username">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="userpassword" placeholder="Enter password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Password</label>
                                        <input id="password-confirm" type="password" id="password_confirmation"
                                            name="password_confirmation"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary btn-block waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <div class="mt-2 text-center">
                                        <p>Already have an account ? <a href="{{ url('login') }}"
                                                class="font-weight-medium text-primary"> Login </a> </p>

                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>

    @endsection