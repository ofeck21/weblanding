<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link @if(!request()->routeIs('dashboard')) collapsed @endif" href="{{route('dashboard')}}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Application</li>

        <li class="nav-item">
            <a class="nav-link @if(!request()->routeIs('templates.*')) collapsed @endif" href="{{route('templates.index')}}">
                <i class="bi bi-layout-text-window-reverse"></i>
                <span>Template</span>
            </a>
        </li><!-- End Template Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-heading">Settings</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-card-list"></i>
                <span>Setting</span>
            </a>
        </li><!-- End Setting Nav -->
        <hr>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" onclick="return document.querySelector('#formLogoutSidebar').submit()">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>

            <form id="formLogoutSidebar" action="{{route('logout')}}" method="POST">
                @csrf
            </form>
        </li>

    </ul>

</aside><!-- End Sidebar-->
