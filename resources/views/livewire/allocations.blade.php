<div class="">
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>RegNumber</th>
                        <th>Student Name</th>
                        <th>Company Name</th>
                        <th>Region</th>
                        <th>District</th>
                        <th>Ward</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($alloctions as $allocate)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline text-danger me-3"></i>
                                <strong>{{ $allocate->student->username }}</strong>
                            </td>
                            <td>{{ $allocate->student->fullname }}
                            </td>
                            <td>{{ $allocate->company->brellah->company }}</td>
                            <td>{{ $allocate->company->brellah->region->region }}</td>
                            <td>{{ $allocate->company->brellah->district->district }}</td>
                            <td>{{ $allocate->company->brellah->ward->ward }}</td>
                            <td>
                                <a href="/profile/{{ $allocate->student_id }}"><span class="badge bg-label-primary me-1"><i
                                            class="mdi mdi-eye"></i></span></a>
                            </td>
                        </tr>
                    @endforeach
    
                </tbody>
            </table>
            @if ($alloctions->isEmpty())
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                    <p class="text-muted">No Data To Display!!</p>
                </div>
            @endif
    
        </div>
    </div>
    
    
    <div class="d-flex justify-content-center">
        <div class="demo-inline-spacing">
            {{-- {{ $data->links() }} --}}
        </div>
    </div>
</div>