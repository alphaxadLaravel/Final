<div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>PF Number</th>
                        <th>Supervisor Name</th>
                        <th>Students</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($supervisors as $supervisor)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{ $supervisor->username }}</strong>
                            </td>
                            <td>{{ ucwords($supervisor->fullname) }}
                            </td>
                            <td>
                                <span class="fw-bold"><span
                                        class="text-danger">{{ count($supervisor->ifm_supervision) }}</span>
                                    Student(s)</span>
                                    {{-- <span class="fw-bold"><span
                                        class="text-danger">{{ count($supervisor->supervising) }}</span>
                                    Student(s)</span> --}}
                            </td>
                            <td>{{ $supervisor->email }}</td>
                            <td>{{ $supervisor->phone }}</td>
                            <td>
                                <a href="/single/{{ $supervisor->id }}"><span
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
