<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
        </a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
        </a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Toko Obat</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            <img style="width:50px; height:50px;" src="{{ asset("storage/image/pengguna/".Auth::user()->email) }}.jpg"  class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column">
                @if(Auth::user()->role == 'Owner')
                {{-- <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Dashboard</p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="/report" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/activity-report" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Activity Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/pegawai-report" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Pegawai Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/payment-report" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Payment Report</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/bestSelling" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Menu Best Selling</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('obat.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Obat</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Pengguna</p>
                    </a>
                </li> --}}
                <li class="nav-item mt-5">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/trx" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>Transaksi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/order" class="nav-link">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>List Order</p>
                    </a>
                </li>
                <li class="nav-item mt-5">
                    <a href="/logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
