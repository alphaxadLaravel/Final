@extends('layouts.app')
@section('title', 'Add New host Supervisor - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> Add Supervisor</h5>
    @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            This Supervisor Already exists!..
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card mb-2">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/request.gif') }}" width="100%" alt="">
                </div>
                <div class="col-md-6">

                    <form action="/new_host" enctype="multipart/form-data" method="POST">
                        @csrf
                        <span class=""> <i class="mdi mdi-account-multiple-plus"></i> Add New Host Supervisor fro Students In your
                            Company!</span>
                        <div class="row mt-3">

                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Supervisor Fullname </label>
                                <input type="text" class="form-control" name="fullname" id=""
                                    aria-describedby="helpId" placeholder="Enter fullname">
                                <small class="text-danger">
                                    @error('fullname')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Supervisor Username </label>
                                <input type="text" class="form-control" name="username" id=""
                                    aria-describedby="helpId" placeholder="Enter username">
                                <small class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Supervisor Email </label>
                                <input type="text" class="form-control" name="email" id=""
                                    aria-describedby="helpId" placeholder="Enter Email..">
                                <small class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="" class="text-muted mb-2">Supervisor Phone </label>
                                <input type="text" class="form-control" name="phone" id=""
                                    aria-describedby="helpId" placeholder="07...">
                                <small class="text-danger">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-2">Choose Department </label>
                                <select id="smallSelect" name="department" class="form-select ">
                                    <option value="">Select department..</option>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->department }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('department')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="row justify-contente-end mb-3 mt-4 px-3">
                            <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-account-multiple-plus"></i>
                                Add Host Supervisor</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
