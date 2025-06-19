<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="" alt="">
            </span>
            <span class="app-brand-text menu-text fs-4 fw-bolder ms-2">PPDB Nusantara 1</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-gauge"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons fa-solid fa-table-columns"></i>
                <div data-i18n="Layouts">Formulir</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('formulir_siswa') }}" class="menu-link">
                        <div data-i18n="Without menu">Data Siswa</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('formulir_orang_tua') }}" class="menu-link">
                        <div data-i18n="Without navbar">Data Orang Tua</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ route('upload_berkas') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-file"></i>
                <div data-i18n="Account Settings">Upload Berkas</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('akun') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-user"></i>
                <div data-i18n="Analytics">Profile</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-sign-out"></i>
                <div data-i18n="Analytics">Logout</div>
            </a>
        </li>
        {{-- <li class="menu-item">
            <a href="{{ route('akun') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-user"></i>
                <div data-i18n="Authentications">Akun</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('logout') }}" class="menu-link">
                <i class="menu-icon tf-icons fa-solid fa-sign-out"></i>
                <div data-i18n="Authentications">Keluar</div>
            </a>
        </li> --}}
    </ul>
</aside>
<!-- / Menu -->
