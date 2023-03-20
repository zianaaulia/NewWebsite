<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
    <div class="nav flex-column">
        <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard/listaplikasi') ? 'active' : '' }}" href="/dashboard/listaplikasi">
        <span data-feather="file-text"></span>
            Data Aplikasi
        </a>
        </li>
    </div>
</nav>