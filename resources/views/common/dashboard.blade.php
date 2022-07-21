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
                            <a href="/fill_logbook" class="btn btn-sm btn-outline-primary">Fill logbook</a>

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
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <a href="/dashboard" class="text-ifm">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1"><i
                                        class="mdi mdi mdi-message-video"></i>Assesments</span>
                                <h3 class="card-title mb-2 ">0</h3>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <a href="/dashboard" class="text-ifm">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1"><i
                                        class="mdi mdi mdi-message-video"></i>Assesments</span>
                                <h3 class="card-title mb-2 ">0</h3>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12  col-6 mb-4">
                    <a href="/dashboard" class="text-ifm">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1"><i class="mdi mdi-cloud-upload "></i>Uploads</span>
                                <h3 class="card-title mb-2 ">0</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-12  col-6 mb-4">
                    <a href="#" class="text-ifm">
                        <div class="card">
                            <div class="card-body">
                                <span class="fw-semibold d-block mb-1"><i
                                        class="mdi mdi-comment-multiple-outline "></i>Comments</span>
                                <h3 class="card-title mb-2 ">0</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="row row-bordered g-0">
                    <div class="col-md-12">
                        {{-- for the company here --}}
                        <div class="d-flex justify-content-between align-items-center ">
                            <h5 class="card-header m-0 me-2 pb-3"><i class="mdi mdi-check-all "></i>
                                Your Students

                            </h5>
                            <div class="dropdown px-3">
                                <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3" style="">
                                    <a class="dropdown-item" href="/all_students">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive text-nowrap">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Reg No</th>
                                        <th>Fullname</th>
                                        <th>Course</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    {{-- @if (session()->get('user')['status'] == 'hod')
                                    @foreach ($sample as $student)
                                        <tr>
                                            <td><i
                                                    class="mdi mdi-account-box-outline"></i><strong>{{ $student->IDNumber }}</strong>
                                            </td>
                                            <td>{{ $student->firstname . ' ' . $student->lastname . ' ' . $student->lastname }}
                                            </td>
                                            <td>{{ $student->course->course }}</td>
                                        </tr>
                                    @endforeach
                                @endif --}}
                                    @for ($i = 0; $i < 3; $i++)
                                        <tr>
                                            <td>fdfsdfdsfsd</td>
                                            <td>fdfsdfdsfsd</td>
                                            <td>fdfsdfdsfsd</td>
                                        </tr>
                                    @endfor

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
