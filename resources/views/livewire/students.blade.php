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

                    @if (session()->get('role')== 'hod')
                        @foreach ($students as $student)
                            <tr>
                                <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                    <strong>{{ $student->username }}</strong>
                                </td>
                                <td>{{ $student->fullname }}
                                </td>
                                <td>{{ $student->course->inshort }}</td>
                                <td>{{ $student->phone }}</td>
                                <td class="text-primary">{{ $student->year }}</td>

                                <td>
                                    <a href="/profile/{{ $student->id }}"><span
                                            class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    {{-- @if (session()->get('user')== 'supervisor')
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
    @if (session()->get('user')== 'hod')
        <div class=" d-flex justify-content-center mt-4">
            {{ $students->links() }}
        </div>
    @endif

    {{-- @if (session()->get('user')== 'supervisor')
        <div class=" d-flex justify-content-center mt-4">
            {{ $superviside->links() }}
        </div>
    @endif --}}
</div>