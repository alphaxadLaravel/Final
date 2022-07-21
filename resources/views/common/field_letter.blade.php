@extends('layouts.app')
@section('title', 'Application Letter - IFM Field Management System')
@section('system')
    @if (session()->get('role') == 'student')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> Field Letters</h5>

        <div class="row">
            <div class="">
                <div class="card">
                    <div class="card-body">
                        @if ($application)
                            <h6 class="card-title"> <i class="menu-icon mdi mdi-cloud-download"></i> Download the Letter Here!
                            </h6>
                            <a href="/download" class="btn btn-sm btn-outline-primary"><i
                                    class="menu-icon mdi mdi-cloud-download"></i> Click to Download Letter</a>
                        @else
                            <div class="alert alert-danger" role="alert">
                                <small>Field Letter haven't been Uploaded Yet by Your HOD!...Please Wait</small>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- HOD Upload and Preview Field Letter --}}
    @if (session()->get('role') == 'hod')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Field Letter</h5>
        @if (Session::has('uploaded'))
            <div class="alert alert-success alert-dismissible" role="alert">
                Letter have been uploaded Successfully!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('updated'))
            <div class="alert alert-success alert-dismissible" role="alert">
                Letter have been updated Successfully!!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-2">
                    <div class="card-body ">
                        <h5 class=""><i class="mdi mdi-cloud-upload"></i> Upload Letter</h5>
                        <form action="/upload" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12 mb-2">
                                    <label for="" class="text-muted mb-1">Attach Field Letter </label>
                                    <input type="file" class="form-control" name="file" id=""
                                        aria-describedby="helpId" placeholder="Enter Company name...">
                                    <small class="text-danger">
                                        @error('file')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="col-md-12">
                                    <div class="row justify-content-center mb-3 mt-4 px-3">
                                        <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i>
                                            Upload Letter</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if ($application)
                            <p> <i class="mdi mdi-link-variant"></i> You can <span class="text-ifm">Update</span> the Letter
                                by uploading Again!</p>

                            @if ($application)
                                <a href="/download" class="btn btn-outline-primary mt-3"> Application
                                    Letter <i class="mdi mdi-download"></i></a>
                            @endif
                        @else
                            <div class="d-flex justify-content-center flex-column align-items-center">
                                <img src="{{ asset('images/no.gif') }}" height="165px" width="150px" alt="">
                                <p class="text-muted">No Any Letter to Download!</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
