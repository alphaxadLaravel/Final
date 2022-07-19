@extends('layouts.outside')

@section('title', "Forgot Password - IFM Field Management System")

@section('outside')
    
<div class="row">
    <div class="col-md-6 mt-5 offset-md-3">
        <div class="card mb-3 ">
            <div class="row g-0">
              <div class="col-md-6 d-none d-md-block d-lg-block">
                <img src="images/chuo.jpg" class="img-fluid rounded-start h-100" alt="...">
              </div>
  
               {{-- the login form here --}}
                  <div class="col-md-6 ">
                    <div class="card-body ">
  
                        <div class="row d-flex flex-md-column justify-content-center align-items-center">
                          <div class=" mb-4 mt-4">
                            <h5 class="text-ifm text-center fw-bold">Password Recovery</h5>
                        </div>
  
                        <form action="/login" method="POST">
                            @csrf
                            <div class="form-group mb-4 mt-4">
                              <label for="" class="text-muted mb-1">Your Email </label>
                              <input type="text" class="form-control" name="username" id="" aria-describedby="helpId" placeholder="Enter Your Email">
                            </div>
                            <div class="row justify-content-center mb-3 mt-4 px-3">
                                <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-login"></i> Recover Password</button>
                            </div>
                            <div class="text-center text-muted">
                                <small>Remebered your Password? <a href="/" class="text-ifm">Back to login</a></small>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
              {{-- end of the login form here --}}
  
            </div>
          </div>
    </div>
  </div>
@endsection