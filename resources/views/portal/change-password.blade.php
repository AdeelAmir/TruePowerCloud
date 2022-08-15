@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">
        <div class="page-header">
            <h1 class="page-title">Account &bullet; Change Password</h1>
        </div>

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="row">
                <div class="col-md-12 col-xl-9">
                    <div class="alert alert-secondary mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        {{--<strong>Success!</strong>--}}
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                </div>
            </div>
        @endif

        @if(\Illuminate\Support\Facades\Session::has('error'))
            <div class="row">
                <div class="col-md-12 col-xl-9">
                    <div class="alert alert-danger mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        {{--<strong>Success!</strong>--}}
                        {{\Illuminate\Support\Facades\Session::get('error')}}
                    </div>
                </div>
            </div>
        @endif

        <div class="row ">
            @include('portal.layouts.side-bar-2')
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('account.profile.update')}}">
                            @csrf
                            <input type="hidden" name="type" value="security" />

                            <div class="">
                                <div class="form-group">
                                    <label for="old_password" class="form-label">Old Password</label>
                                    <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="new_password" class="form-label">New Password</label>
                                    <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New Password" maxlength="50" minlength="10" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" maxlength="50" minlength="10" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-4 mb-0">Change Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection