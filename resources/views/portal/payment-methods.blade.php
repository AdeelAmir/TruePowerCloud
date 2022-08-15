@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">
        <div class="page-header">
            <h1 class="page-title">Account &bullet; Payment Methods</h1>
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

        <div class="row ">
            @include('portal.layouts.side-bar-2')
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add New Credit Card</h3>
                        {{--<div class="card-options">
                            <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Visa<span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)">Visa</a></li>
                                    <li><a href="javascript:void(0)">Mastercard</a></li>

                                </ul>
                            </div>
                        </div>--}}
                    </div>
                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data" action="{{route('account.profile.update')}}">
                            @csrf
                            <input type="hidden" name="type" value="payment"/>

                            <div class="">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="card_holder_name" class="form-label">CardHolder Name</label>
                                        <input type="text" class="form-control" id="card_holder_name" name="card_holder_name" placeholder="First Name" maxlength="50" required value="{{base64_decode($Profile[0]->card_holder_name)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-9 mb-0">
                                    <div class="form-group">
                                        <label for="card_number" class="form-label">Credit card Number</label>
                                        <input type="number" class="form-control" id="card_number" name="card_number" placeholder="number" maxlength="50" minlength="14" required value="{{base64_decode($Profile[0]->card_number)}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-3 mb-0">
                                    <div class="form-group">
                                        <label for="card_cvv" class="form-label">CVV Number</label>
                                        <input type="number" class="form-control" id="card_cvv" name="card_cvv" placeholder="675" maxlength="10" minlength="3" required value="{{base64_decode($Profile[0]->card_cvv)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="card_expiration_month" class="form-label">Expiration Date</label>
                                <div class="row ">
                                    <div class="col-6">
                                        <select name="card_expiration_month" id="card_expiration_month" class="form-control form-select select2"
                                                data-bs-placeholder="Select Month" required>
                                            <option label="Select Month">Month</option>
                                            <option value="1" <?php if(base64_decode($Profile[0]->card_expiration_month) == 1) { echo 'selected'; } ?>>January</option>
                                            <option value="2" <?php if(base64_decode($Profile[0]->card_expiration_month) == 2) { echo 'selected'; } ?>>February</option>
                                            <option value="3" <?php if(base64_decode($Profile[0]->card_expiration_month) == 3) { echo 'selected'; } ?>>March</option>
                                            <option value="4" <?php if(base64_decode($Profile[0]->card_expiration_month) == 4) { echo 'selected'; } ?>>April</option>
                                            <option value="5" <?php if(base64_decode($Profile[0]->card_expiration_month) == 5) { echo 'selected'; } ?>>May</option>
                                            <option value="6" <?php if(base64_decode($Profile[0]->card_expiration_month) == 6) { echo 'selected'; } ?>>June</option>
                                            <option value="7" <?php if(base64_decode($Profile[0]->card_expiration_month) == 7) { echo 'selected'; } ?>>July</option>
                                            <option value="8" <?php if(base64_decode($Profile[0]->card_expiration_month) == 8) { echo 'selected'; } ?>>August</option>
                                            <option value="9" <?php if(base64_decode($Profile[0]->card_expiration_month) == 9) { echo 'selected'; } ?>>September</option>
                                            <option value="10" <?php if(base64_decode($Profile[0]->card_expiration_month) == 10) { echo 'selected'; } ?>>October</option>
                                            <option value="11" <?php if(base64_decode($Profile[0]->card_expiration_month) == 11) { echo 'selected'; } ?>>November</option>
                                            <option value="12" <?php if(base64_decode($Profile[0]->card_expiration_month) == 12) { echo 'selected'; } ?>>December</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="card_expiration_year" id="card_expiration_year" class="form-control form-select select2"
                                                data-bs-placeholder="Select Year" required>
                                            <option label="Select Year">Year</option>
                                            @php
                                                $Number = \Carbon\Carbon::now()->format('Y');
                                            @endphp
                                            @while($Number <= 2040)
                                                <option value="{{$Number}}" <?php if(base64_decode($Profile[0]->card_expiration_year) == $Number) { echo 'selected'; } ?>>{{$Number}}</option>
                                                @php
                                                    $Number++;
                                                @endphp
                                            @endwhile
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0 text-dark">
                                Your Credit card information is encrypted
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-2 mb-0">Add Credit Card</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection