<div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item mb-2">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('home') ? 'page' : '' }}">
            Progress
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="" class="nav-link {{ request()->is('formulir-pendaftaran') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('formulir-pendaftaran') ? 'page' : '' }}">
            Formulir Pendaftaran
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('unggah-scan-raport') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('unggah-scan-raport') ? 'page' : '' }}">
            Unggah Scan Raport
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('ujian-online') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('ujian-online') ? 'page' : '' }}">
            Ujian Online
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('unggah-dokumen') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('unggah-dokumen') ? 'page' : '' }}">
            Unggah Dokumen
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('unggah-surat-pernyataan') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('unggah-surat-pernyataan') ? 'page' : '' }}">
            Unggah Surat Pernyataan
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('registrasi-ulang') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('registrasi-ulang') ? 'page' : '' }}">
            Registrasi Ulang
            </a>
        </li>
        <li class="nav-item mb-2">
            <a href="#" class="nav-link {{ request()->is('konfirmasi-bayar-registrasi') ? 'active' : 'link-dark' }}" aria-current="{{ request()->is('konfirmasi-bayar-registrasi') ? 'page' : '' }}">
            Konfirmasi Bayar Registrasi
            </a>
        </li>
    </ul>

    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
            id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ Auth::user()->name }}</strong>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Ganti Foto</a></li>
            <li><a class="dropdown-item" href="#">Ganti Kata Sandi</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li>
                <a class="btn-danger btn-link dropdown-item text-danger text-decoration-none text-center p-0"
                    href="{{ route('logout') }} "
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
