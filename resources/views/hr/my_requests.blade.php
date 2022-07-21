@extends('layouts.app')
@section('title', 'Requests Made - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> All Requests</h5>
    @if (Session::has('requested'))
        <div class="alert alert-success alert-dismissible" role="alert">
            Request Made Successfuly!, Please wait for Approval from Faculty HOD!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @livewire('my-request')


@endsection
