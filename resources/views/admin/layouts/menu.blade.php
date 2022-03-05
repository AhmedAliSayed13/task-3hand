<!-- Header -->
<div class="header " >

    <!-- Logo -->
    <div class="header-left">
        <a href="{{route('blogs')}}" class="logo">
            <img src="{{asset('dashboard/img/logo.png')}}" alt="Logo">
        </a>
        <a href="{{route('blogs')}}" class="logo logo-small">
            <img src="{{asset('dashboard/img/logo-small.png')}}" alt="Logo"  width="30" height="30">
        </a>
    </div>
    <!-- /Logo -->

    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fe fe-text-align-left"></i>
    </a>

    

    <!-- Mobile Menu Toggle -->
    <a class="mobile_btn" id="mobile_btn">
        <i class="fa fa-bars"></i>
    </a>
    <!-- /Mobile Menu Toggle -->

    <!-- Header Right Menu -->
    <ul class="nav user-menu">

        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                <span class="user-img"><img class="rounded-circle" src="{{asset('img/profiles/'.img_profile())}}" width="31" alt="{{ auth()->user()->name }}"></span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{asset('img/profiles/'.img_profile())}}" alt="User Image" class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{ auth()->user()->name }}</h6>
                        <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                        <p class="text-muted mb-0">{{get_type()}} </p>
                    </div>
                </div>
                <a class="dropdown-item"  href="">الملف الشخصي</a>
                <a class="dropdown-item"  href="">تغيير كلمة السر </a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('خروج') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <!-- /User Menu -->

    </ul>
    <!-- /Header Right Menu -->

</div>
<!-- /Header -->
