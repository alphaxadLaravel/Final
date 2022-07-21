@extends('layouts.app')
@section('title', 'My Allocation details - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Allocation</h5>

    <div>
        @if (Session::has('allocated'))
            <div class="alert alert-success alert-dismissible" role="alert">
                You have successfully allocated your self, Contact the Company for more details..
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (Session::has('hasfield'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                You have another allocation pending...
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card mb-2">
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center">
                        <img src="{{ asset('images/fill.gif') }}" height="350px" alt="">
                    </div>
                    <div class="col-md-6">

                        @if ($allocation)
                            <h6 class="text-ifm text-end"><i class="mdi mdi-chart-gantt"></i> My Allocation Details
                            </h6>

                            <small class="text-muted">Company Name: </small>
                            <p class="">{{ $allocation->company->brellah->company }}</p>

                            <small class="text-muted">Department: </small>
                            <p class="">
                                  Pending....
                                </p>

                            <small class="text-muted">Company Phone Number: </small>
                            <p class="">{{ $allocation->company->brellah->phone }}</p>

                            <small class="text-muted">Company Location: </small>
                            <p class="">
                                {{ $allocation->company->brellah->region->region . ' - ' . $allocation->company->brellah->district->district }}
                            </p>

                            <div class="d-flex justify-content-end">
                                <button class="btn btn-outline-danger btn-sm" disabled><i class="mdi mdi-delete "></i>
                                    Cancel Allocation</button>
                            </div>
                        @endif

                    </div>
                </div>
                {{-- <div class="d-flex justify-content-center flex-column align-items-center">
                <img src="{{ asset('images/no.gif') }}" height="165px" width="150px" alt="">
                <p class="text-muted">No Allocation Details To Show!</p>
            </div> --}}
            </div>
        </div>
    </div>

@endsection
