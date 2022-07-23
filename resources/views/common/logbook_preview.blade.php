@extends('layouts.app')
@section('title', 'Preview Logbook - IFM Field Management System')
@section('system')

    @if (session()->get('role') == 'student')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Logbook </h5>
    @endif
    @if (session()->get('role') == 'supervisor')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light"> <i class="mdi mdi-keyboard-backspace"></i> Supervisor
                /</span> Logbook Preview </h5>
    @endif

    @if (session()->get('role') == 'host')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light"> <i class="mdi mdi-keyboard-backspace"></i> Host /</span>
            Logbook Preview </h5>
    @endif

    <!-- Section: Timeline -->
    <section class="">
        <div class="card mb-3">
            <div class="card-body ">
                <div class="d-flex justify-content-between align-items-center">
                    @if (session()->get('role') == 'supervisor' || session()->get('role') == 'host')
                        <div class="">
                            <span class="fw-bold ">{{ $student->username }} - {{ $student->fullname }}</span>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-outline-primary btn-sm">Export Logbook <i
                                    class="mdi mdi-download"></i></a>
                            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#backDropModal">Add Signature <i class="mdi mdi-link"></i></a>
                        </div>
                    @endif

                    @if (session()->get('role') == 'student')
                        <div class="">
                            <span class="fw-bold "><i class="menu-icon mdi mdi-book-open-page-variant"></i> My Logbook Pages
                                - <span class="text-danger">
                                    {{ $logbook->count() }}
                                </span>/60 </span>
                        </div>
                        <div class="">
                            <a href="#" class="btn btn-outline-primary btn-sm">Export Logbook <i
                                    class="mdi mdi-download"></i></a>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <ul class="timeline">
            @foreach ($logbook as $page)
                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">{{ $page->created_at->format('d.M.Y') }} - {{ $page->day }} {{ $page->week }}
                    </h5>
                    <div class="col-md mb-4 mb-md-0">
                        <div class="accordion mt-3" id="accordionExample">

                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#task{{ $page->id }}" aria-expanded="true"
                                        aria-controls="accordion">
                                        <b>Tasks Perfomed</b>
                                    </button>
                                </h2>
                                <div id="task{{ $page->id }}" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        {{ $page->task }}
                                        <small class="mt-1 text-success">{{ $page->created_at }}</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#lesson{{ $page->id }}" aria-expanded="true"
                                        aria-controls="accordion">
                                        <b>Lesson Learnt!</b>
                                    </button>
                                </h2>

                                <div id="lesson{{ $page->id }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        {{ $page->lesson }}
                                        <small class="mt-1 text-success">{{ $page->created_at }}</small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

        </ul>
    </section>

    <div class="col-lg-4 col-md-3">
        <div class="mt-3">

            {{-- Signature modal --}}
            <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
                <div class="modal-dialog">
                    <form class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="backDropModalTitle">Apply Signature</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="nameBackdrop" class="form-label">Select week </label>
                                    <select id="smallSelect" name="week" class="form-select ">
                                        <option value="">Select Number of the Week..</option>
                                        @for ($i = 1; $i <= 8; $i++)
                                            <option value="Week {{ $i }}">Week {{ $i }}</option>
                                        @endfor
                                    </select>
                                    <small class="text-danger">
                                        @error('week')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="nameBackdrop" class="form-label">Enter Signature</label>
                                    <input type="text" id="nameBackdrop" class="form-control"
                                        placeholder="Enter Signature e.g A.Joseph" />
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            {{-- <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button> --}}
                            <button type="button" class="btn btn-outline-primary ">Submit Signature</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Timeline -->
@endsection
