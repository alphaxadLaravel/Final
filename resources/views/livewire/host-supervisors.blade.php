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
                    @foreach ($hosts as $host)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{ $host->fullname }}</strong>
                            </td>
                            <td>{{ $host->email }}
                            </td>
                            <td>{{ $host->phone }}</td>
                            <td>{{ $host->department->department }}</td>
                            <td>
                                <span class="fw-bold"><span
                                        class="text-danger">{{ count($host->camp_supervision) }}</span>
                                    Student(s)</span>
                            </td>
                            <td>
                                <a href="/super_profile/{{ $host->id }}"><span
                                        class="badge bg-label-primary me-1"><i class="mdi mdi-eye"></i></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
    <div class="d-flex justify-content-center mt-3">
        {{-- {{ $supervisors->links() }} --}}
    </div>
</div>
