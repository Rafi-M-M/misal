
<nav class="navbar navbar-dark bg-dark navbarr fixed-top navbar-expand-lg mb-5 p-2">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">
        <img src="{{ asset('img/image.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        STTCIPASUNG
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark custom-offcanvas" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="img/image.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            STTCIPASUNG
          </a></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body ">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Profil
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item " href="{{ url('/profil/organisasi') }}">Organisasi</a></li>
                <li><a class="dropdown-item " href="{{ url('/profil/akreditasi') }}">Akreditasi</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Fasilitas
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ url('/fasilitas/mesjid') }}">Mesjid</a></li>
                <li><a class="dropdown-item" href="{{ url('/fasilitas/aula') }}">Aula</a></li>
                <li><a class="dropdown-item" href="{{ url('/fasilitas/lab_komputer') }}">Lab Komputer</a></li>
                <li><a class="dropdown-item" href="{{ url('/fasilitas/sarana_olahraga') }}">Sarana Olahraga</a></li>
                <li><a class="dropdown-item" href="{{ url('/fasilitas/perpustakaan') }}">Perpustakaan</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Layanan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://ijazah.kemdikbud.go.id/">Verifikasi Ijazah</a></li>
                <li><a class="dropdown-item" href="https://journal.sttcipasung.ac.id/index.php/CTP">Jurnal</a></li>
                <li><a class="dropdown-item" href="{{ url('/layanan/pendaftaran') }}">pendaftaran mahasiswa baru</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link active dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tautan
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="https://lppm.sttcipasung.ac.id/">LPPM</a></li>
                <li><a class="dropdown-item" href="https://upm.sttcipasung.ac.id/">UPM</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>