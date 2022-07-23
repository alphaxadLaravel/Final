@extends('layouts.app')
@section('title', 'Make Request - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> Send Request</h5>
    @if (Session::has('dates'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            Please Select the Correct dates...
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (Session::has('umerudia'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            You have Arleady Requested students in this Course..
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

                    <form action="/sending" method="POST">
                        @csrf
                        <span class=""> <i class="mdi mdi-telegram"></i> Request for students to conduct field in your
                            Compnay!</span>
                        <div class="row mb-3 mt-4">
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-2">Choose Course </label>
                                <select id="smallSelect" name="course" class="form-select ">
                                    <option value="">Select Course..</option>
                                    @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->course }}</option>
                                    @endforeach
                                </select>
                                <small class="text-danger">
                                    @error('course')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-2">How Many Students ? </label>
                                <select id="smallSelect" name="students" class="form-select ">
                                    <option value="">Select Number of Students..</option>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }} student(s)..</option>
                                    @endfor
                                </select>
                                <small class="text-danger">
                                    @error('students')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="" class="text-muted mb-2">Date to Start</label>
                                <input type="date" class="form-control" name="date_in" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small class="text-danger">
                                    @error('date_in')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-6">
                                <label for="" class="text-muted mb-2">Date to End </label>
                                <input type="date" class="form-control" name="date_out" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small class="text-danger">
                                    @error('date_out')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="row justify-contente-end mb-3 mt-4 px-3">
                            <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-telegram"></i>
                                Send Request</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
