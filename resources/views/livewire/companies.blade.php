<div>
    <div class="card">
        @if (session()->get('role') == 'hod')

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Reg Number</th>
                            <th>Company Name</th>
                            <th>Region</th>
                            <th>Requested</th>
                            <th>Intake date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($student_requests as $request)
                            <tr>
                                <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                    <strong>{{ $request->company->brellah->regNumber }}</strong>
                                </td>
                                <td>{{ $request->company->brellah->company }}
                                </td>
                                <td>{{ $request->company->brellah->region->region }}</td>
                                {{-- <td>{{ $request->company->brellah->district->district }}</td> --}}
                                <td>
                                    <span class="fw-bold"><span class="text-danger">{{ $request->students }}</span>
                                        Student(s)</span>
                                </td>
                                <td>{{ $request->startDate }}</td>
                                <td><span
                                        class="{{ $request->status == 'Denied!' ? 'text-danger' : 'text-success' }}">{{ $request->status }}</span>
                                </td>

                                <td>
                                    <a href="/accept/{{ $request->id }}"><span class="badge bg-label-primary me-1"><i
                                                class="mdi mdi-check-all"></i></span></a>

                                    <a href="/denied/{{ $request->id }}"><span class="badge bg-label-danger me-1"><i
                                                class="mdi mdi-cancel"></i></span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        @endif

        @if (session()->get('role') == 'student')

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Region</th>
                            <th>District</th>
                            <th>Requested</th>
                            <th>Intake date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($students_show as $request)
                            <tr>
                                <td>{{ $request->company->brellah->company }}
                                </td>
                                <td>{{ $request->company->brellah->region->region }}</td>
                                <td>{{ $request->company->brellah->district->district }}</td>
                                <td>
                                    <span class="fw-bold"><span class="text-danger">{{ $request->students }}</span>
                                        Student(s)</span>
                                </td>
                                <td>{{ $request->startDate }}</td>

                                <td>
                                    @if ($company != null)
                                        @if ($request->company_id == $company->company_id)
                                            <span class="text-success"><i class="mdi mdi-check-all "></i>
                                                Allocated..</span>
                                        @else
                                            <a href="/student/{{ $request->id }}"><span
                                                    class="badge bg-label-primary me-1"><i
                                                        class="mdi mdi-check-all"></i> I
                                                    Accept</span></a>
                                        @endif
                                    @else
                                        <a href="/student/{{ $request->id }}"><span
                                                class="badge bg-label-primary me-1"><i class="mdi mdi-check-all"></i> I
                                                Accept</span></a>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        @endif

        @if (!$student_requests)
            <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                <p class="text-muted">No Requests To Display!!</p>
            </div>
        @endif


    </div>
</div>
<div class="d-flex justify-content-center mt-3">
    {{-- {{ $supervisors->links() }} --}}
</div>
</div>
