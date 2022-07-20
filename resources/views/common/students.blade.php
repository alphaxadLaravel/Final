@extends('layouts.app')
@section('title', 'All Students - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Students</h5>

    {{-- @if (session()->get('user')['status'] == 'hod')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">HOD /</span> All Students</h5>
    @endif


    @if (session()->get('user')['status'] == 'supervisor')
        <h5 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">Supervisor /</span> My Students</h5>
    @endif --}}

    <div>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>RegNumber</th>
                            <th>Full Name</th>
                            <th>Course</th>
                            <th>Phone</th>
                            <th>Year</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
    
                        {{-- @if (session()->get('user')['status'] == 'hod')
                            @foreach ($students as $student)
                                <tr>
                                    <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                        <strong>{{ $student->user->IDNumber }}</strong>
                                    </td>
                                    <td>{{ $student->firstname . ' ' . $student->middlename . ' ' . $student->lastname }}
                                    </td>
                                    <td>ODBFC</td>
                                    <td>{{ $student->phone }}</td>
                                    <td class="text-primary">{{ $student->year }}</td>
    
                                    <td>
                                        <a href="/profile/{{ $student->user_id }}"><span
                                                class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif --}}
    
                        {{-- @if (session()->get('user')['status'] == 'supervisor')
                            @foreach ($superviside as $student)
                                <tr>
                                    <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                        <strong>{{ $student->student->IDNumber }}</strong>
                                    </td>
                                    <td>{{ $student->student->firstname . ' ' . $student->student->middlename . ' ' . $student->student->lastname }}
                                    </td>
                                    <td>{{ $student->student->course->course }}</td>
                                    <td>{{ $student->student->phone }}</td>
                                    <td class="text-primary">{{ $student->student->year }}</td>
                                    <td>
                                        <a href="/profile/1"><span
                                                class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif --}}
                    </tbody>
                </table>
    
            </div>
        </div>
        {{-- @if (session()->get('user')['status'] == 'hod')
            <div class=" d-flex justify-content-center mt-4">
                {{ $students->links() }}
            </div>
        @endif
    
        @if (session()->get('user')['status'] == 'supervisor')
            <div class=" d-flex justify-content-center mt-4">
                {{ $superviside->links() }}
            </div>
        @endif --}}
    </div>
    

@endsection
