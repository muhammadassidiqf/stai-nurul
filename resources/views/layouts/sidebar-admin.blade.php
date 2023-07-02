<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <img src="{{ asset('frontend/img/stai-logo.png') }}" class="app-brand-logo demo" alt="">
            <span class="app-brand-text demo h3 mb-0 fw-bold ms-2">Web Admin</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Landing
                Pages</span></li>
        <li class="menu-item">
            <a href="{{ route('berita.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-news'></i>
                <div data-i18n="Berita">Berita</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('prodi.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-menu'></i>
                <div data-i18n="Prodi">Program Studi</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div data-i18n="Invoice">Modul Tentang</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('visi-misi.index') }}" class="menu-link">
                        <div data-i18n="Visi Misi">Visi Misi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('sejarah.index') }}" class="menu-link">
                        <div data-i18n="Preview">Sejarah</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('tentang.index') }}" class="menu-link">
                        <div data-i18n="Edit">Tentang</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div data-i18n="Add">Struktur Organisasi</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Data Master</span></li>
        <li class="menu-item">
            <a href="{{ route('user.index') }}" class="menu-link">
                <i class='menu-icon tf-icons bx bx-user'></i>
                <div data-i18n="Pengguna">Pengguna</div>
            </a>
        </li>
    </ul>
</aside>
<!-- / Menu -->
