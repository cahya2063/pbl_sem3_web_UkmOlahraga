<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-volleyball-ball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UKM OLAHRAGA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(request()->routeIs('pendaftaran', 'detail-terima', 'detail-tolak', 'detail-pendaftaran')) active @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Pendaftaran</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('pendaftaran') }}">Data Pendaftar</a>
                <a class="collapse-item" href="{{ route('detail-terima') }}">Diterima</a>
                <a class="collapse-item" href="{{ route('detail-tolak') }}">Ditolak</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(request()->routeIs('divisi', 'create-divisi', 'edit-divisi')) active @endif">
        <a class="nav-link" href="{{ route('divisi') }}">
            <i class="fas fa-shield-alt"></i>
            <span>Divisi</span></a>
    </li>
    <li class="nav-item @if(request()->routeIs('jadwal', 'create-jadwal', 'edit-jadwal')) active @endif">
        <a class="nav-link" href="{{ route('jadwal') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>Jadwal Latihan</span></a>
    </li>
    <li class="nav-item @if(request()->routeIs('alat', 'create-alat', 'edit-alat')) active @endif">
        <a class="nav-link" href="{{ route('alat') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Alat</span></a>
    </li>
    <li class="nav-item @if(request()->routeIs('presensi')) active @endif">
        <a class="nav-link" href="{{ route('presensi') }}">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Presensi</span></a>
    </li>

    <!-- Pembatas -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
            Transaksi
        </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(request()->routeIs('peminjaman', 'pengembalian')) active @endif">
        <a class="nav-link collapsed " data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Transaksi</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('peminjaman') }}">Peminjaman Alat</a>
                <a class="collapse-item" href="{{ route('pengembalian') }}">Pengembalian Alat</a>
            </div>
        </div>
    </li>

    <!-- Pembatas -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
