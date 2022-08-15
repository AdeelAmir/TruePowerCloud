@extends('portal.layouts.main')
@section('content')
<div class="main-container container-fluid">
    <div class="page-header">
        <h1 class="page-title">Domain Name Connection</h1>
    </div>

    <div class="row">
        <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <div>
                        <h3 class="card-title"><i class="fa-solid fa-globe"></i>&nbsp;Connect a domain to your hosting plan</h3>
                    </div>
                </div>
                <div class="card-body p-4 m-0">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="radio" name="domainNameConnection" id="domainNameConnection1" value="1" checked>
                            <label for="domainNameConnection1" class="mb-0">New Domain</label>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="domainNameConnection" id="domainNameConnection2" value="2">
                            <label for="domainNameConnection2" class="mb-0">Existing Domain</label>
                        </div>
                        <div class="col-md-12 mt-3">
                            <input type="text" name="domainName" id="domainName" class="form-control" placeholder="Domain Name" maxlength="100" />
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-primary" onclick="AddToCart(this, '{{$Package}}');">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection