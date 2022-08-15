@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">
        <div class="page-header">
            <h1 class="page-title">Account</h1>
        </div>

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="row">
                <div class="col-md-12 col-xl-11">
                    <div class="alert alert-secondary mb-4" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                        {{--<strong>Success!</strong>--}}
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            @include('portal.layouts.side-bar-2')
            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">ACCOUNT</h4>
                    </div>

                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('account.profile.update')}}">
                            @csrf
                            <input type="hidden" name="type" value="general" />

                            <p>Manage your account settings</p>
                            <div class="">
                                <div class="form-group">
                                    <label for="first_name" class="form-label">First Name
                                    </label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" maxlength="150" value="{{$Profile[0]->first_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="last_name" class="form-label">Last Name
                                    </label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" maxlength="150" value="{{$Profile[0]->last_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" readonly value="{{$Profile[0]->email}}">
                                </div>

                                <div class="form-group ">
                                    <label for="phone" class="form-label">Phone #</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" maxlength="150" value="{{$Profile[0]->phone}}">
                                </div>

                                <div class="form-group ">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address" maxlength="500" value="{{$Profile[0]->address}}">
                                </div>

                                <div class="form-group ">
                                    <label for="state" class="form-label">State</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="State" maxlength="150" value="{{$Profile[0]->state}}">
                                </div>

                                <div class="form-group ">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City" maxlength="150" value="{{$Profile[0]->city}}">
                                </div>

                                <div class="form-group ">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="number" class="form-control" id="zip" name="zip" placeholder="Zip" maxlength="150" value="{{$Profile[0]->zip}}">
                                </div>

                                <button type="submit" class="btn btn-primary btn-sm mt-4 mb-0">Update Profile</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection