@extends('layouts.app')
@section('title', 'Field Allocations - IFM Field Management System')
@section('system')
    <div>

        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> Field Allocations</h5>

        @livewire('allocations')

    </div>

@endsection
