<nav class="navbar navbar-expand-lg bg-green navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="{{route('frontend') }}" class="nav-item nav-link active">Home</a>
            <a href="{{route('sejarah') }}" class="nav-item nav-link ">Sejarah</a>
            <a href="{{route('pengumuman') }}" class="nav-item nav-link ">Pengumuman</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{route('dataumum') }}" class="dropdown-item">Data Umum</a>
                    <a href="{{route('tujuan') }}" class="dropdown-item">Tujuan</a>
                    <a href="{{route('visimisi') }}" class="dropdown-item">Visi Misi</a>
                    <a href="{{route('pengurus') }}" class="dropdown-item">Pengurus</a>
                    <a href="{{route('strukturorganisasi') }}" class="dropdown-item">Struktur Organisasi</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Berita</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{route('kegiatanfrontend') }}" class="dropdown-item">Kegiatan</a>
                </div>
            </div>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang Muba</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{route('galerimuba') }}" class="dropdown-item">Galeri</a>
                    <a href="{{route('tujuanmuba') }}" class="dropdown-item">Tujuan</a>
                    <a href="{{route('sejarahmuba') }}" class="dropdown-item">Sejarah</a>
                </div>
            </div> -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Galeri</a>
                <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">
                    <a href="{{route('galeri') }}" class="dropdown-item">Foto Kegiatan</a>
                </div>
            </div>
        </div>
        @auth
        <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout') }}" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">
            <i class="fa fa-arrow-right-to-bracket"></i>
            Logout
        </a>
 
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
        <a href="{{route('login') }}" class="btn btn-sm btn-light rounded-pill py-2 px-4 d-none d-lg-block">
            <i class="fa fa-arrow-right-to-bracket"></i>
            Login
        </a>
        @endauth

    </div>
</nav>