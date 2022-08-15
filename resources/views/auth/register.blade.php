@extends('layouts.app')
@section('content')

<!-- BACKGROUND-IMAGE -->

    <!-- PAGE -->
    <div class="page">
        <div class="">
            <!-- CONTAINER OPEN -->
            <div class="col col-login mx-auto mt-7">
                <div class="text-center">
                    <img src="{{asset('public/assets/images/brand/logo.png')}}" class="header-brand-img" alt="" style="width: 200px;">
                </div>
            </div>

            <div class="container-login100">
                <div class="wrap-login100 p-6">
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf

                        <span class="login100-form-title pb-5">
                            Sign Up
                        </span>
                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                                    </span>
                                    <input id="first_name" type="text" class="input100 border-start-0 ms-0 form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name" maxlength="150">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-user" aria-hidden="true"></i>
                                    </span>
                                    <input id="last_name" type="text" class="input100 border-start-0 ms-0 form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="Last Name" maxlength="150">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <input id="email" type="email" class="input100 border-start-0 ms-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-key" aria-hidden="true"></i>
                                    </span>
                                    <input id="password" type="password" class="input100 border-start-0 ms-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-key" aria-hidden="true"></i>
                                    </span>
                                    <input id="password-confirm" type="password" class="input100 border-start-0 ms-0 form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn btn-default">
                                        Register
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Already have account?<a href="{{url('login')}}" class="text-primary ms-1">Sign In</a></p>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!-- End PAGE -->
</div>
<!-- BACKGROUND-IMAGE CLOSED -->
@endsection