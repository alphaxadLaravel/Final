@extends('layouts.app')
@section('title', 'Single Supervisor - IFM Field Management System')
@section('system')
    @if (session()->get('role') == 'hr')
        <h5 class=" py-3 mb-2"><i class="mdi mdi-keyboard-backspace"></i>
            <span class="text-muted fw-light"> HR /</span> Supervisor Profile</h5>
    @endif
    @if (session()->get('role') == 'hod')
        <h5 class=" py-3 mb-2"><a href="/all_supervisors" class="text-primary"><i class="mdi mdi-keyboard-backspace"></i></a>
            <span class="text-muted fw-light"> HOD /</span> Supervisor Profile</h5>
    @endif
    @livewire('single-supervisor', ['id' => $id])

@endsection
