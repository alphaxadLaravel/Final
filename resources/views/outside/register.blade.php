@extends('layouts.outside')

@section('title', 'Company Register - Field Management System')

@section('outside')

    <div class="row">
        <div class="col-md-6 mt-5 offset-md-3">

            <div class="card mb-3 ">
                <div class="row g-0">
                    <div class="col-md-6 d-none d-md-block d-lg-block">
                        <img src="images/chuo.jpg" class="img-fluid rounded-start h-100" alt="...">
                    </div>
                    <div class="col-md-6 ">
                        <div class="card-body ">
                            <div class="row d-flex flex-md-column justify-content-center align-items-center">
                                <div class=" my-2">
                                    <h5 class="text-ifm text-center fw-bold"> Company Register</h5>
                                </div>

                                @if (Session::has('none'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        Wrong Reg number or Password!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                <form action="/new_company" method="POST">
                                    @csrf

                                    <div class="form-group mb-2 mt-2">
                                        <label for="" class="text-muted mb-1">Brellah RegNumber </label>
                                        <input type="text" class="form-control" name="regNumber" id=""
                                            aria-describedby="helpId" placeholder="Company Reg Number from Brellah">
                                        <small class="text-danger">
                                            @error('regNumber')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    <div class="form-group mb-2 mt-2">
                                        <label for="" class="text-muted mb-1">HR Phone </label>
                                        <input type="text" class="form-control" name="phone" id=""
                                            aria-describedby="helpId" placeholder="Enter HR Phone number">
                                        <small class="text-danger">
                                            @error('phone')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                    <div class="form-group mb-2 mt-2">
                                        <label for="" class="text-muted mb-1">HR email </label>
                                        <input type="email" class="form-control" name="email" id=""
                                            aria-describedby="helpId" placeholder="Enter HR Email">
                                        <small class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>

                                    <div class="form-group mb-2 mt-2">
                                        <label for="" class="text-muted mb-1">HR Username </label>
                                        <input type="text" class="form-control" name="username" id=""
                                            aria-describedby="helpId" placeholder="Enter Your Username">
                                        <small class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>

                                    <div class="row justify-content-center mb-3 mt-4 px-3">
                                        <button class="btn btn-outline-primary" type="submit">Register Here </button>
                                    </div>
                                    <div class="text-center text-muted">
                                        <small>Have an Account ? <a href="/" class="text-ifm">Login
                                                Here!</a></small>
                                    </div>

                                    {{-- <button class="btn btn-outline-primary" type="submit" wire:click="">Proceed <i class="mdi mdi-arrow-right"></i></button> --}}

                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
