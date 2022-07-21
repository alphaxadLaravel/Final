@extends('layouts.app')
@section('title', 'Companies Available - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Companies Requests</h5>
    @if (Session::has('accepted'))
        <div class="alert alert-success alert-dismissible" role="alert">
            Company Accepted To show up to Students!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @livewire('companies')

@endsection
