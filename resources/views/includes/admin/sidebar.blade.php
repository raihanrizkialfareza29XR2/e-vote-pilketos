<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-toolbox"></i>
        </div>
       <a href="{{ route('dashboard') }}"><div class="text-center mb-3" style="color: white">Admin</div></a>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item {{ Request::is('voters') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('voters.index') }}">
            <i class="fas fa-fw fa-vote-yea"></i>
            <span>Voters</span></a>
    </li>
    <li class="nav-item {{ Request::is('kandidat') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kandidat.index') }}">
            <i class="fas fa-fw fa-people-arrows"></i>
            <span>Kandidat</span></a>
    </li>
    <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-users-cog"></i>
            <span>Admin</span></a>
    </li>
    <li class="nav-item {{ Request::is('dashboard/realtime') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admreal') }}">
            <i class="fas fa-fw fa-chart-line"></i>
            <span>Realtime Kandidat</span></a>
    </li>
    <li class="nav-item {{ Request::is('dashboard/chart') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admch') }}">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Chart</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>