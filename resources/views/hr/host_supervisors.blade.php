@extends('layouts.app')
@section('title', 'All Host Supervisors - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HR /</span> All Supervisors</h5>

    <div>
        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Supervisor Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>Students</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        {{-- @foreach ($supervisors as $supervisor)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{ $supervisor->user->IDNumber }}</strong></td>
                            <td>{{ $supervisor->firstname . ' ' . $supervisor->middlename . ' ' . $supervisor->lastname }}</td>
                            <td>
                                <span class="fw-bold"><span
                                        class="text-danger">{{ count($supervisor->supervising) }}</span>
                                    Student(s)</span>
                            </td>
                            <td>{{ $supervisor->email }}</td>
                            <td>{{ $supervisor->phone }}</td>
                            <td>
                                <a href="/super_profile/{{ $supervisor->id }}"><span
                                        class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                            </td>
                        </tr>
                    @endforeach --}}
                    </tbody>
                </table>

            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            {{-- {{ $supervisors->links() }} --}}
        </div>
    </div>


@endsection
