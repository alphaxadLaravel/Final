<div>
    <div class="card">
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Reg Number</th>
                        <th>Full Name</th>
                        <th>Pages Filled</th>
                        <th>Date Started</th>
                        <th>Last Filled</th>
                        <th>Preview</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($logbooks as $logbook)
                        <tr>
                            <td><i class="mdi mdi-account-box-outline fa-lg text-danger me-3"></i>
                                <strong>{{$logbook->student->username}}</strong>
                            </td>
                            <td>{{$logbook->student->fullname}}
                            </td>
                            <td><span class="text-danger">0</span>/60</td>
                            <td>22-07-2022</td>
                            <td>22-07-2022</td>
                            <td>
                                <a href="/logbook/{{$logbook->student->id}}"><span class="badge bg-label-primary me-1"><i
                                            class="mdi mdi-eye"></i></span></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="{{ asset('images/no.gif') }}" height="200px" width="200px" alt="">
                <p class="text-muted">No Data To Display!!</p>
            </div> --}}
        </div>
    </div>
    <div class=" d-flex justify-content-center mt-4">
        {{-- {{ $students->links() }} --}}
    </div>
</div>
