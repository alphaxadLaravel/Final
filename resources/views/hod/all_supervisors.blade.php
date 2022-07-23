@extends('layouts.app')
@section('title', 'All Supervisors - IFM Field Management System')
@section('system')
    @if (session()->get('role') == 'hod')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Supervisors</h5>
    @endif
    @if (session()->get('role') == 'hr')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> All Supervisors</h5>
    @endif
    @livewire('all-supervisors')


@endsection
