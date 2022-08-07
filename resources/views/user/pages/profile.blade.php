<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <b>{{ Auth::user()->name }}</b> </span>
        <img class="img-profile rounded-circle" src="{{ asset('asset/img/undraw_profile.svg') }}">
    </a>
    <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
            <i class="las la-user-secret"></i>
            Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="las la-user-cog"></i>
            Settings
        </a>
        <a class="dropdown-item" href="#">
            <i class="las la-tasks"></i>
            Activity Log
        </a>
    
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <b><i class="las la-sign-out-alt alert-danger ">logout </i></b>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </div>
</li>
