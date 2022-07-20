@extends('layouts.app')
@section('title', 'Student Responses to Companies - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> Responses</h5>
    {{-- @livewire('company-list') --}}
    <div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>RequestID</th>
                            <th>Reg Number</th>
                            <th>Student Name</th>
                            <th>Company Name</th>
                            <th>Region</th>
                            <th>District</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        {{-- @for ($i = 0; $i < 8; $i++)
                            <tr>
                                <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                    <strong>BRE/1234</strong>
                                </td>
                                <td>Tanzania Railway Athority
                                </td>
                                <td>Mwanza</td>
                                <td>Nyamagana</td>
                                <td>
                                    <span class="fw-bold"><span
                                            class="text-danger">10</span>
                                        Student(s)</span>
                                </td>
                                <td>
                                    <span class="fw-bold"><span
                                            class="text-success">5/10</span>
                                        Student(s)</span>
                                </td>
                                <td>
                                    <a href="/company_profile"><span
                                            class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                                </td>
                            </tr>
                        @endfor --}}
                       
                    </tbody>
                </table>
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                    <p class="text-muted">No Data To Display!!</p>
                </div>
    
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{-- {{ $supervisors->links() }} --}}
        </div>
    </div>
    
@endsection
