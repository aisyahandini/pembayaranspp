<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }} "
                aria-current="page" href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/siswa') ? 'active' : '' }} "
                href="/dashboard/siswa">
                    <span data-feather="file"></span>
                    data siswa
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/walikelas') ? 'active' : '' }} "
                    href="/dashboard/walikelas">
                    <span data-feather="file-text"></span>
                    data walikelas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pembayaran') ? 'active' : '' }} "
                    href="/dashboard/pembayaran">
                    <span data-feather="dollar-sign"></span>
                    data pembayaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/tagihan') ? 'active' : '' }}" href="/dashboard/tagihan">
                    <span data-feather="list"></span>
                    data tagihan
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/petunjuk') ? 'active' : '' }}" href="/dashboard/petunjuk">
                    <span data-feather="arrow-right"></span>
                    petunjuk pembayar
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/jenis') ? 'active' : '' }}" href="/dashboard/jenis">
                    <span data-feather="type"></span>
                    jenis pembayaran
                </a>
            </li>
        </ul>
</nav>
