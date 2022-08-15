@extends('portal.layouts.main')
@section('content')
    <div class="main-container container-fluid">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <h1 class="page-title">Create Support Ticket</h1>
            <div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Support Ticket</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create New Support Ticket</h3>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="row align-items-center">
                                <label class="col-xl-12 form-label">Subject</label>
                                <div class="col-xl-12">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group select2-lg">
                            <label class="form-label">Related Service</label>
                            <select name="country" class="form-control form-select form-select-lg select2"
                                    data-bs-placeholder="Select Country">
                                <option value="br">1</option>
                                <option value="cz">2</option>
                                <option value="de">3</option>
                                <option value="pl" selected>4</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row ">
                                <label class="col-xl-12 form-label">Description</label>
                                <div class="col-xl-12">
                                    <textarea rows="12" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer d-sm-flex">
                    <div class="mt-2 mb-2">
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title=""
                           data-bs-original-title="Attach"><span class="ri-attachment-2"></span><i
                                    class="fas fa-paperclip"></i></a>
                        <a href="javascript:void(0)" data-bs-toggle="tooltip" title=""
                           data-bs-original-title="Link"><span class="ri-link"></span><i
                                    class="fa-solid fa-link"></i></a>


                    </div>
                    <div class="btn-list ms-auto my-auto">
                        <button class="btn btn-danger btn-space mb-0">Cancel</button>
                        <button class="btn btn-primary btn-space mb-0">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection