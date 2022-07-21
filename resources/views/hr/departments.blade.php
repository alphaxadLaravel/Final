@extends('layouts.app')
@section('title', 'Departments Available - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> Departments</h5>


    {{-- HOD Upload and Preview Field Letter --}}
    {{-- @if (session()->get('user')['status'] == 'hod') --}}
    @if (Session::has('department'))
        <div class="alert alert-success alert-dismissible" role="alert">
            New department Added successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::has('exist'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            Department Arleady exist
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-2">
                <div class="card-body ">
                    <h5 class="text-muted"><i class="mdi mdi-plus"></i> Add New Department</h5>
                    <form action="/add_department" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-1">Department Name </label>
                                <input type="text" class="form-control" name="department" id=""
                                    aria-describedby="helpId" placeholder="Enter Department name...">
                                <small class="text-danger">
                                    @error('department')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-12">
                                <div class="row justify-content-center mb-3 mt-4 px-3">
                                    <button class="btn btn-outline-primary" type="submit"><i
                                            class="mdi mdi-clear"></i>Submi department</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">

            @forelse ($departments as $department)
                <div class="card mb-2">
                    <div class="card-body">
                        <span>{{ $department->department }}</span>
                    </div>
                </div>
            @empty
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <img src="{{ asset('images/no.gif') }}" height="165px" width="150px" alt="">
                            <p class="text-muted">No Departments to Show!</p>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    {{-- @endif --}}

@endsection
