@extends('layouts.app')
@section('title', 'Wellcome - IFM Field Management System')
@section('system')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7 ">
                        <div class="card-body">
                            <h5 class="card-title text-ifm">Hi 👋
                                @if (session()->get('role') == 'student')
                                    Student
                                @elseif(session()->get('role') == 'hod')
                                    H.O.D
                                @elseif(session()->get('role') == 'supervisor')
                                    Supervisor
                                @elseif(session()->get('role') == 'hr')
                                    HR
                                @elseif(session()->get('role') == 'host')
                                    Host Supervisor
                                @endif
                                
                            </h5>
                            <p class="mb-4">
                                {{-- Welcome at IFM Field Management System. <span class="fw-bold">50%</span> --}}
                                Welcome at IFM Field Management System!
                            </p>
                           

                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('images/Dashboard.png') }}" height="140" alt="View Badge User"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
