@extends('layouts.app')
@section('title', 'Make Request - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> Send Request</h5>
    <div class="card mb-2">
        <div class="card-body ">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/request.gif') }}" width="100%" alt="">
                </div>
                <div class="col-md-6">

                    <form action="/register_company" enctype="multipart/form-data" method="POST">
                        @csrf
                        <span class=""> <i class="mdi mdi-telegram"></i> Request for students to conduct field in your
                            Compnay!</span>
                        <div class="row mb-3 mt-4">
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-2">Choose Course </label>
                                <select id="smallSelect" wire:model="district" class="form-select ">
                                    <option value="">Select District..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>
                                    <option value="">Bachelor Degree in Computer Science..</option>

                                </select>
                                <small class="text-danger">
                                    @error('company')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label for="" class="text-muted mb-2">How Many Students ? </label>
                                <select id="smallSelect" wire:model="district" class="form-select ">
                                    <option value="">Select Quantity of Students..</option>
                                    <option value="1">1 student..</option>
                                    <option value="2">2 student..</option>
                                    <option value="3">3 student..</option>
                                    <option value="4">4 student..</option>
                                    <option value="5">5 student..</option>
                                    <option value="6">6 student..</option>
                                    <option value="7">7 student..</option>
                                    <option value="8">8 student..</option>
                                    <option value="9">9 student..</option>
                                    <option value="10">10 student..</option>

                                </select>
                                <small class="text-danger">
                                    @error('company')
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
                                <input type="date" class="form-control" name="date_in" id=""
                                    aria-describedby="helpId" placeholder="">
                                <small class="text-danger">
                                    @error('date_in')
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
