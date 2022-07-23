<div>
    <div>
        <div class="card">
            @if (session()->get('role')== 'hod')

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Reg Number</th>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Company Name</th>
                            <th>Region</th>
                            <th>Start date</th>
                            {{-- <th>Position</th> --}}
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($responses as $response)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{$response->student->username}}</strong>
                            </td>
                            <td>{{$response->student->fullname}}
                            </td>
                            <td>{{$response->student->course->inshort}}</td>
                            <td>{{$response->company->brellah->company}}</td>
                            <td>{{$response->company->brellah->region->region}}</td>
                            <td>{{$response->student_request->startDate}}</td>
                            {{-- <td>
                                <span class="fw-bold"><span
                                        class="text-success"> /</span>
                                    Student(s)</span>
                            </td> --}}
                        </tr>
                        @endforeach

                        
                       
                    </tbody>
                </table>
                @if (!$responses)
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                    <p class="text-muted">No Data To Display!!</p>
                </div>
                @endif
            </div>
            @endif

            @if (session()->get('role')== 'hr')

            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Reg Number</th>
                            <th>Student Name</th>
                            <th>Course</th>
                            <th>Level</th>
                            <th>Year</th>
                            {{-- <th>Position</th> --}}
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($hr_response as $response)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{$response->student->username}}</strong>
                            </td>
                            <td>{{$response->student->fullname}}
                            </td>
                            <td>{{$response->student->course->course}}</td>
                            <td>{{$response->student->level}}</td>
                            <td>{{$response->student->year}}</td>
                           
                            {{-- <td>
                                <span class="fw-bold"><span
                                        class="text-success"> /</span>
                                    Student(s)</span>
                            </td> --}}
                        </tr>
                        @endforeach
                       
                    </tbody>
                </table>
                @if (!$hr_response)
                <div class="d-flex justify-content-center flex-column align-items-center">
                    <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                    <p class="text-muted">No Data To Display!!</p>
                </div>
                @endif
            </div>
            @endif

        </div>
        <div class="d-flex justify-content-center mt-3">
            {{-- {{ $supervisors->links() }} --}}
        </div>
    </div>
</div>
