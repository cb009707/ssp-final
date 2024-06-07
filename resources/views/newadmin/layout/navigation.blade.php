<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">


        <i class="bi bi-list toggle-sidebar-btn"></i>

        <a href="{{'/'}}" id="home-logo"> <img src="{{url('assets/img/back_logo.png')}}" alt="" width="120px" style="margin-left: 20px"></a>
    </div><!-- End Logo -->



    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">


            <li class="nav-item dropdown">

                <!-- End Notification Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">





                </ul><!-- End Messages Dropdown Items -->

            </li><!-- End Messages Nav -->

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <span class="d-none d-md-block dropdown-toggle ps-2">{{Auth::user()->name}}</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>{{Auth::user()->name}}</h6>

                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>


                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>{{ __('Log Out') }}</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>


                </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
