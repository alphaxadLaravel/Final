@extends('layouts.app')
@section('title', "Field Allocations - IFM Field Management System")
@section('system')
  {{-- @livewire('allocations') --}}

  <div>
    {{-- @if (session()->get('user')['status'] == 'supervisor')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> Field Allocations</h5>
    @endif

    @if (session()->get('user')['status'] == 'hod')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Field Allocations</h5>
    @endif --}}
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Field Allocations</h5>


  @livewire('allocations')

</div>

@endsection
