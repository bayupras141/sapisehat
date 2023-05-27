<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <i class="fas fa-tachometer-alt"></i> --}}
        <img src="{{ asset('img/cow-logo.png') }}" alt="logo" class="icon invert">
        <div class="sidebar-brand-text mx-3"><sub>MONITORING</sub> PMK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('backend.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">


    @if (auth()->user()->role == 'admin')
        <!-- Heading -->
        <div class="sidebar-heading">
            Data Master
        </div>


        <li class="nav-item active">
            <a class="nav-link" href="{{ route('backend.user.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Pengguna</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="{{ route('backend.device.index') }}">
                <i class="fas fa-fw fa-microchip"></i>
                <span>Device</span></a>
        </li>

        <hr class="sidebar-divider">
    @endif

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('backend.sapi.index') }}">
            <img src="{{ asset('img/cow-logo.png') }}" alt="logo" class="icon-mini invert">
            <span>Sapi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->
