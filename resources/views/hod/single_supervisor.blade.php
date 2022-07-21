@extends('layouts.app')
@section('title', "Single Supervisor - IFM Field Management System")
@section('system')

  <h5 class=" py-3 mb-2"><a href="/all_supervisors" class="text-primary"><i class="mdi mdi-keyboard-backspace"></i></a> <span class="text-muted fw-light"> HOD /</span> Supervisor Profile</h5>
  @livewire('single-supervisor',['id'=>$id])
  
  @endsection
