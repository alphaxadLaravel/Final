@extends('layouts.app')
@section('title', 'Personal Profile - IFM Field Management System')
@section('system')
    @if (session()->get('role') == 'hod')
        <h5 class=" py-3 mb-2"><a href="/all_students" class="text-primary"><i
                    class="mdi mdi-keyboard-backspace"></i></a>
            <span class="text-muted fw-light"> HOD /</span> Student Profile
        </h5>
    @endif
    @if (session()->get('role') == 'supervisor')
        <h5 class=" py-3 mb-2"><a href="/all_students" class="text-primary"><i
                    class="mdi mdi-keyboard-backspace"></i></a>
            <span class="text-muted fw-light"> Supervisor /</span> Student Profile
        </h5>
    @endif
    <div class="row">
        <div class="col-md-3 my-2">
            <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                    <img src="{{ asset('images/alpha.jpg') }}" class="img-fluid rounded-top" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body text-center">
                    <h6 class="card-title">
                        {{ $student->fullname}}</h6>
                    <p class="card-text fw-bold">{{ $student->username }}</p>
                </div>


            </div>
            @if (session()->get('role') == 'hod' && $student->ifm_supervision)
                <div class="card my-3 px-3 pt-2 text-center">
                    <small class="text-muted">Supervised By: </small>
                    <span class=" fw-bold">
                       
                        {{ucwords($student->ifm_supervision->supervisor->fullname)}}
                    </span>

                </div>
            @endif
            @if (session()->get('role') == 'hod' && !$student->ifm_supervision)
                <div class="card my-3 p-4 text-center">
                    <span class=" fw-bold">
                        <a href="/all_supervisors" class="btn btn-sm btn-outline-primary">Assign Supervisor</a>
                    </span>

                </div>
            @endif
            @if (session()->get('role') == 'supervisor')
                <div class="card my-3 px-3 pt-2 text-center">
                    <a href="#" class="btn btn-sm btn-outline-primary m-3"> <i
                            class="menu-icon mdi mdi-book-open-page-variant mdi-small"></i> View Logbook</a>
                </div>
            @endif
        </div>
        <div class="col-md-9 mt-2">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="true">
                            Profile Details
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="false">
                            Field Details
                        </button>
                    </li>

                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade " id="navs-top-home" role="tabpanel">
                        
                        <div class="">
                            <small class="text-muted">Company Name: </small>
                            <p class="">Tanzania Railway Authority</p>

                            <small class="text-muted">Department: </small>
                            <p class="">Computer Management</p>

                            <small class="text-muted">Company Phone Number: </small>
                            <p class="">+255-743-196-599</p>

                            <small class="text-muted">Company Location: </small>
                            <p class="">Dar-es-Salaam, Ilala, Kigamboni</p>
                        </div>

                        {{-- <div class="d-flex justify-content-center flex-column align-items-center">
                        <img src="{{asset('images/no.gif')}}" height="200px" width="200px" alt="">
                        <p class="text-muted">Field Details will be Here!</p>
                    </div> --}}
                    </div>
                    <div class="tab-pane active show " id="navs-top-profile" role="tabpanel">


                        <div class="">
                            <small class="">Full Name: </small>
                            <p class="">
                                {{ $student->fullname}}
                            </p>

                            <small class="">Course: </small>
                            <p class=" "> {{ $student->course->course }}</p>

                            <small class="">Level: </small>
                            <p class=" ">{{ $student->level . ' Year ' . $student->year }}</p>

                            <small class="">Phone: </small>
                            <p class=" ">{{ $student->phone }}</p>
                            
                            @if (session()->get('role') == 'supervisor')
                                <div class="d-flex justify-content-end mb-3">
                                    <a href="#" class="btn btn-sm btn-outline-danger"> <i
                                            class="menu-icon mdi mdi-message-video"></i> Conduct Assessment</a>
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
