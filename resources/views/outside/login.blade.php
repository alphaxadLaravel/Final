@extends('layouts.outside')

@section('title', 'Login - IFM Field Management System')

@section('outside')

    <div class="row">
        <div class="col-md-6 mt-5 offset-md-3">
            <div class="card mb-3 ">
                <div class="row g-0">
                    <div class="col-md-6 d-none d-md-block d-lg-block">
                        <img src="images/chuo.jpg" class="img-fluid rounded-start h-100" alt="...">
                    </div>

                    {{-- Login fomu inaanzia hapa --}}
                    <div class="col-md-6 ">
                        <div class="card-body ">

                            <div class="row d-flex flex-md-column justify-content-center align-items-center">
                                <div class=" mb-2 mt-4">
                                    <h5 class="text-ifm text-center fw-bold">IFM Field Management</h5>
                                </div>
                                @if (Session::has('none'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        Wrong Reg number or Password!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                                <form action="/walete" method="POST">
                                    @csrf
                                    @if (Session::has('registered'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            Company Registered Successfully!,<br>Login Credentials Sent To Your Email!
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="form-group mb-4 mt-3">
                                        <label for="" class="text-muted mb-1">Username </label>
                                        <input type="text" class="form-control" name="username" id=""
                                            aria-describedby="helpId" placeholder="Enter Username">
                                        <small class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    <label class="d-flex justify-content-between" for=""><span
                                            class="text-muted">Password</span> <small><a href="/forgot"
                                                class="text-ifm">Forgot Password ?</a></small></label>
                                    <input type="password" class="form-control" name="password" id=""
                                        aria-describedby="helpId" placeholder="Enter Password">
                                    <small class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                    <div class="row justify-content-center mb-3 mt-4 px-3">
                                        <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-login"></i>
                                            Login</button>
                                    </div>
                                    <div class="text-center text-muted">
                                        <small>Do you Own a Company ? <a href="/register" class="text-ifm">Register
                                                Here!</a></small>
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
