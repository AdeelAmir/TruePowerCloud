@extends('layouts.app')
@section('content')
<!-- BACKGROUND-IMAGE -->
<div class="login-img">
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
                    @error('email')
                    <div class="alert alert-danger">
                        {!! wordwrap($message, 30, '<br>') !!}
                    </div>
                    @enderror

                    @error('password')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                    @enderror

                    @if(\Illuminate\Support\Facades\Session::has('success'))
                        <div class="alert alert-success" id="message-alert">
                            {!! wordwrap(\Illuminate\Support\Facades\Session::get('success'), 30, '<br>') !!}
                        </div>
                    @elseif(\Illuminate\Support\Facades\Session::has('error'))
                        <div class="alert alert-danger" id="message-alert">
                            {!! wordwrap(\Illuminate\Support\Facades\Session::get('error'), 30, '<br>') !!}
                        </div>
                    @endif

                    <form class="login100-form validate-form" method="post" action="{{route('login')}}">
                        @csrf
                        <span class="login100-form-title pb-5">
                            Login
                        </span>
                        <div class="panel panel-primary">
                            <div class="panel-body tabs-menu-body p-0 pt-5">
                                <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-envelope text-muted" aria-hidden="true"></i>
                                    </span>
                                    <input id="email" type="email" class="input100 border-start-0 form-control ms-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" placeholder="Email" autofocus>
                                </div>
                                <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                    <span class="input-group-text bg-white text-muted">
                                        <i class="fa-solid fa-key text-muted" aria-hidden="true"></i>
                                    </span>
                                    <input id="password" type="password" class="input100 border-start-0 form-control ms-0 @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="Password">
                                </div>
                                <div class="text-end pt-4">
                                    <p class="mb-0"><a href="{{ route('password.request') }}" class="text-primary ms-1">Forgot Password?</a></p>
                                </div>
                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn btn-default">
                                        Log In
                                    </button>
                                </div>
                                <div class="text-center pt-3">
                                    <p class="text-dark mb-0">Not a member?<a href="{{url('register')}}" class="text-primary ms-1">Sign Up</a></p>
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