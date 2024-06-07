<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->


        @auth
            @if(auth()->user()->email == 'admin@admin.com')  <!-- Checks if the user is the admin based on their email -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.user.index') }}">
                    <i class="bi bi-grid"></i>
                    <span>Manage Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/plans') }}">
                    <i class="bi bi-grid"></i>
                    <span>Manage Plans</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('user/bookings') }}">
                    <i class="bi bi-grid"></i>
                    <span>Booking History</span>
                </a>
            </li>


            @endif
        @endauth


    @auth
            @if(auth()->user()->email != 'admin@admin.com')  <!-- Checks if the user is not the admin based on their email -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/plan') }}">
                    <i class="bi bi-grid"></i>
                    <span>My Plan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/user/bookings') }}">
                    <i class="bi bi-grid"></i>
                    <span>My Bookings</span>
                </a>
            </li>


            @endif
        @endauth


{{--        <x-dropdown-link href="{{ route('profile.show') }}">--}}
{{--            {{ __('My Profile') }}--}}
{{--        </x-dropdown-link>--}}

        <li class="nav-item">
            <a class="nav-link" href="{{ route('profile.show') }}">
                <i class="bi bi-grid"></i>
                <span>My Profile</span>
            </a>
        </li>





    </ul>

</aside><!-- End Sidebar-->
