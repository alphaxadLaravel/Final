<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">

            <span class="demo text-ifm fw-bold ms-2">IFM Field Management</span> <br>

        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="menu-link">
                <i class="menu-icon mdi mdi-av-timer"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        {{-- Nav links for the supervisor here --}}
        @if (session()->get('role') == 'hod')
            <li class="menu-item {{ request()->is('field_letter') ? 'active' : '' }}">
                <a href="/field_letter" class="menu-link ">
                    <i class="menu-icon mdi mdi-link-variant"></i>
                    <div data-i18n="Basic">Field Letters</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('all_supervisors') ? 'active' : '' }}">
                <a href="/all_supervisors" class="menu-link">
                    <i class="menu-icon mdi mdi-account-network"></i>
                    <div data-i18n="Basic">Supervisors</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('all_students') ? 'active' : '' }}">
                <a href="/all_students" class="menu-link">
                    <i class="menu-icon mdi mdi-account-multiple-outline"></i>
                    <div data-i18n="Basic">Students</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('responses') ? 'active' : '' }}">
                <a href="/responses" class="menu-link">
                    <i class="menu-icon mdi mdi-rotate-right"></i>
                    <div data-i18n="Basic">Responses</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('company_list') ? 'active' : '' }}">
                <a href="/company_list" class="menu-link">
                    <i class="menu-icon mdi mdi-city"></i>
                    <div data-i18n="Basic">Companies</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="menu-icon mdi mdi-message-video"></i>
                    <div data-i18n="Basic">Assessment</div>
                </a>
            </li>
        @endif

        {{-- Nav links for the Superviosor Here --}}
        @if (session()->get('role') == 'supervisor')
            <li class="menu-item {{ request()->is('all_students') ? 'active' : '' }}">
                <a href="/all_students" class="menu-link">
                    <i class="menu-icon mdi mdi-account-multiple-outline"></i>
                    <div data-i18n="Basic">My Students</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('allocations') ? 'active' : '' }}">
                <a href="/allocations" class="menu-link">
                    <i class="menu-icon mdi mdi-map-marker-radius"></i>
                    <div data-i18n="Basic">Allocations</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('student_logbooks') ? 'active' : '' }}">
                <a href="/student_logbooks" class="menu-link">
                    <i class="menu-icon mdi mdi-book-open-page-variant"></i>
                    <div data-i18n="Basic">Logbooks</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="menu-icon mdi mdi-message-video"></i>
                    <div data-i18n="Basic">Assessment</div>
                </a>
            </li>
        @endif

        {{-- Nav links for the Student Here --}}
        @if (session()->get('role') == 'student')
            <li class="menu-item {{ request()->is('field_letter') ? 'active' : '' }}">
                <a href="/field_letter" class="menu-link ">
                    <i class="menu-icon mdi mdi-link-variant"></i>
                    <div data-i18n="Basic">Field Letters</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('my_allocation') ? 'active' : '' }}">
                <a href="/my_allocation" class="menu-link">
                    <i class="menu-icon mdi mdi-map-marker-radius"></i>
                    <div data-i18n="Basic">My Allocation</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('company_list') ? 'active' : '' }}">
                <a href="/company_list" class="menu-link">
                    <i class="menu-icon mdi mdi-city"></i>
                    <div data-i18n="Basic">Companies</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('student_logbooks') ? 'active' : '' }}">
                <a href="/fill_logbook" class="menu-link">
                    <i class="menu-icon mdi mdi-book-open-page-variant"></i>
                    <div data-i18n="Basic">Logbook</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="#" class="menu-link">
                    <i class="menu-icon mdi mdi-message-video"></i>
                    <div data-i18n="Basic">Assessment</div>
                </a>
            </li>
        @endif

        {{-- Companies HR links her --}}
        @if (session()->get('role') == 'hr')
            <li class="menu-item {{ request()->is('make_request') ? 'active' : '' }}">
                <a href="/make_request" class="menu-link">
                    <i class="menu-icon mdi mdi-feather"></i>
                    <div data-i18n="Basic">Make Request</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('my_requests') ? 'active' : '' }}">
                <a href="/my_requests" class="menu-link">
                    <i class="menu-icon mdi mdi-telegram"></i>
                    <div data-i18n="Basic">My Request</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('responses') ? 'active' : '' }}">
                <a href="/responses" class="menu-link">
                    <i class="menu-icon mdi mdi-rotate-right"></i>
                    <div data-i18n="Basic">Responses</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('add_host') ? 'active' : '' }}">
                <a href="/add_host" class="menu-link">
                    <i class="menu-icon mdi mdi-account-multiple-plus"></i>
                    <div data-i18n="Basic">Add Supervisors</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('host_supervisors') ? 'active' : '' }}">
                <a href="/host_supervisors" class="menu-link">
                    <i class="menu-icon mdi mdi-account-network"></i>
                    <div data-i18n="Basic">Host Supervisors</div>
                </a>
            </li>
            <li class="menu-item {{ request()->is('departments') ? 'active' : '' }}">
                <a href="/departments" class="menu-link">
                    <i class="menu-icon mdi mdi-lan"></i>
                    <div data-i18n="Basic">Departments</div>
                </a>
            </li>
        @endif

        {{-- Host supervisor Links --}}
        @if (session()->get('role') == 'host')
            <li class="menu-item {{ request()->is('all_students') ? 'active' : '' }}">
                <a href="/all_students" class="menu-link">
                    <i class="menu-icon mdi mdi-account-multiple-outline"></i>
                    <div data-i18n="Basic">My Students</div>
                </a>
            </li>

            <li class="menu-item {{ request()->is('student_logbooks') ? 'active' : '' }}">
                <a href="#" class="menu-link">
                    <i class="menu-icon mdi mdi-book-open-page-variant"></i>
                    <div data-i18n="Basic">Logbooks</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="/student_logbooks" class="menu-link">
                    <i class="menu-icon mdi mdi-playlist-plus"></i>
                    <div data-i18n="Basic">Assign Tasks</div>
                </a>
            </li>
        @endif
    </ul>
</aside>
