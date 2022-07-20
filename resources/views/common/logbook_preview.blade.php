@extends('layouts.app')
@section('title', 'Preview Logbook - IFM Field Management System')
@section('system')
    <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Logbook </h5>


    {{-- @if (session()->get('user')['status'] == 'student')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light">Student /</span> My Logbook </h5>
    @endif
    @if (session()->get('user')['status'] == 'supervisor')
        <h5 class=" py-3 mb-2"><span class="text-muted fw-light"> <a href="/student_logbooks"><i
                        class="mdi mdi-keyboard-backspace"></i></a> Supervisor /</span> Logbook Preview </h5>
    @endif --}}
    {{-- <hr class="mx-2 mb-3"> --}}

    <!-- Section: Timeline -->
    <section class="">
        <div class="card mb-3">
            <div class="card-body ">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- @if (session()->get('user')['status'] == 'supervisor') --}}
                    <div class="">
                        <span class="fw-bold ">IMC/BIT/191234 - Alphaxad Jozee Kakulu</span>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-outline-primary btn-sm">Export Logbook <i
                                class="mdi mdi-download"></i></a>
                        <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#backDropModal">Add Signature <i class="mdi mdi-link"></i></a>
                    </div>
                    {{-- @endif --}}

                    {{-- @if (session()->get('user')['status'] == 'student') --}}
                    <div class="">
                        <span class="fw-bold "><i class="menu-icon mdi mdi-book-open-page-variant"></i> My Logbook Pages
                            - <span class="text-danger">20</span>/100 </span>
                    </div>
                    <div class="">
                        <a href="#" class="btn btn-outline-primary btn-sm">Export Logbook <i
                                class="mdi mdi-download"></i></a>
                    </div>
                    {{-- @endif --}}
                </div>
            </div>
        </div>
        <ul class="timeline">
            @for ($i = 0; $i < 5; $i++)
                <li class="timeline-item mb-5">
                    <h5 class="fw-bold">20/02/2022 - Day 23 Week 1</h5>
                    <div class="col-md mb-4 mb-md-0">
                        <div class="accordion mt-3" id="accordionExample">

                            <div class="card accordion-item active">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                        data-bs-target="#task1" aria-expanded="true" aria-controls="accordion">
                                        <b>Tasks Perfomed</b>
                                    </button>
                                </h2>
                                <div id="task1" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Error provident voluptas
                                        eos magnam, harum commodi repudiandae? Sed unde iusto molestias! Dolore, voluptates
                                        quidem veritatis velit perferendis dolorum veniam eius quibusdam.
                                        <small class="mt-1 text-success">6:00 Am</small>
                                    </div>
                                </div>
                            </div>

                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#lesson1" aria-expanded="true" aria-controls="accordion">
                                        <b>Lesson Learnt!</b>
                                    </button>
                                </h2>

                                <div id="lesson1" class="accordion-collapse collapse" data-bs-parent="#accordionExample"
                                    style="">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae itaque tenetur
                                        eaque perferendis labore ratione provident eius vitae ullam porro, perspiciatis,
                                        laudantium reiciendis sint aliquam nam similique. Maiores, sapiente voluptatem?
                                        <small class="mt-1 text-success">6:00 Am</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endfor

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
                                <div class="col mb-3">
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
