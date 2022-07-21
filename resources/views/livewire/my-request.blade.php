<div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Course</th>
                        <th>Students</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($requests as $request)
                        <tr>
                            <td>
                                <strong>{{ $request->course->course }}</strong>
                            </td>
                            <td>
                                <span class="fw-bold"><span
                                        class="text-danger">{{ $request->students }}</span>
                                    Student(s)</span>
                            </td>
                            <td>{{ $request->startDate }}</td>
                            <td>{{ $request->endDate  }}</td>
                            <td><span class="text-success">{{ $request->status  }}</span></td>
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
