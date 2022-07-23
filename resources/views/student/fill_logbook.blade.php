@extends('layouts.app')
@section('title', 'Fill Logbook - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> Fill Logbook</h5>
    @if (Session::has('wait'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        Please wait untill you are Allocated Supervisor...
        <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
    </div>
@endif
    <div class="card mb-2">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{ asset('images/note.gif') }}" height="340px" alt="">
                </div>
                <div class="col-md-6">

                    <form action="/fillLogbook" method="POST">
                        @csrf
                        <div class="d-flex justify-content-end my-3">
                            <a href="/logbook_preview" class="btn btn-sm btn-outline-primary"><i class="mdi mdi-eye"></i>
                                Preview Logbook</a>
                        </div>
                        <div class="row mb-3">
                            <div class="col-6">
                                <label for="" class="text-muted mb-1">Choose the Day<span
                                        class="text-danger">*</span></label>
                                <select id="smallSelect" name="day" class="form-select ">
                                    <option value="">Select Number of the Day..</option>
                                    @for ($i = 1; $i <= 60; $i++)
                                        <option value="Day {{ $i }}">Day {{ $i }}</option>
                                    @endfor
                                </select>
                                <small class="text-danger">
                                    @error('day')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-6">
                                <label for="" class="text-muted mb-1">Choose the Week<span
                                        class="text-danger">*</span></label>
                                <select id="smallSelect" name="week" class="form-select ">
                                    <option value="">Select Number of the Week..</option>
                                    @for ($i = 1; $i <= 8; $i++)
                                        <option value="Week {{ $i }}">Week {{ $i }}</option>
                                    @endfor
                                </select>
                                <small class="text-danger">
                                    @error('week')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="" class="text-muted mb-1">Describe Tasks done Today! <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="task" placeholder="write down all tasks you have conducted today.."
                                    id="exampleFormControlTextarea1" rows="2"></textarea>
                                <small class="text-danger">
                                    @error('task')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="" class="text-muted mb-1">Describe Lesson learnt Today! <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" name="lesson" placeholder="write down the lessons you have learnt from the tasks.."
                                    id="exampleFormControlTextarea1" rows="2"></textarea>
                                <small class="text-danger">
                                    @error('lesson')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-3 mt-4 px-3">
                            <button class="btn btn-outline-primary" type="submit"><i class="mdi mdi-clear"></i> Submit
                                Todays Details</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
