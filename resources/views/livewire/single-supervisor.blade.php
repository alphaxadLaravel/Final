<div>
    @if (Session::has('assigned'))
    <div class="alert alert-success alert-dismissible" role="alert">
        Students Assigned Successfully!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
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
                        {{ $details->fullname}}
                    </h6>
                    <p class="card-text fw-bold">{{ $details->username }}</p>
                </div>
            </div>
            <div class="card my-3 px-3 pt-2 text-center">
                
                <p class="text-muted">Student Assigned: <span class="text-dark fw-bold">{{ count($details->ifm_supervision) }}</span></p>
                {{-- <a href="#" class="btn btn-sm btn-outline-primary m-3">Assign Supervisor</a> --}}
            </div>
        </div>
        <div class="col-md-9 mt-2">
            <div class="nav-align-top mb-4">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                            @if ($supervision->isEmpty())
                                Assign Students
                            @else
                                Students Assigned
                            @endif
                        </button>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                            data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                            Profile
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="navs-top-home" role="tabpanel">
                        @if ($supervision->isEmpty())
                       
                            <div class="my-2 d-flex justify-content-between">
                                <button wire:click="assign" class="btn btn-outline-primary btn-sm ">Assign Selected
                                    Students</button>
                                <span class="text-muted fw-bold"><span
                                        class="text-ifm">{{ count($selected) }}</span> Selected</span>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>RegNumber</th>
                                            <th>Student Name</th>
                                            <th>Level</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($unSupervised as $noSuper)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" style="cursor: pointer"
                                                                class="form-check-input" wire:model="selected" id=""
                                                                value="{{ $noSuper->id }}">
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>{{ $noSuper->username }}</td>
                                                <td>{{ ucwords($noSuper->fullname) }}
                                                </td>
                                                <td>{{ ucfirst($noSuper->level) }}</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        @else
                         
                            <span class="mt-3 mb-4 px-3"><i class="mdi mdi-chart-gantt mdi-24px"></i>List of Student
                                Assigned to Supervise</span>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>RegNumber</th>
                                            <th>Student Name</th>
                                            <th>Course</th>
                                            <th>Year</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($supervision as $student)
                                            <tr>
                                                <td>{{ $student->student->username }}</td>
                                                <td>{{ ucwords($student->student->fullname) }}
                                                </td>
                                                <td>{{$student->student->course->inshort}}</td>
                                                <td>{{$student->student->year}}</td>
                                                <td>
                                                    <a href="/delete/{{ $student->id }}"><span class="badge bg-label-primary me-1"><i
                                                        class="mdi mdi-delete"></i></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                    <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                        <div class="">

                            <div class="">
                                <small class="text-muted">Full Name: </small>
                                <p class="">
                                    {{ ucwords($details->fullname) }}</p>

                               <small class="text-muted">Email: </small>
                                <p class="">{{ $details->email }}</p>

                               <small class="text-muted">Phone: </small>
                                <p class="">{{ $details->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
