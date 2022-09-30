<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <!-- bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <!-- bootstrap icon  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">\

  {{-- Boxicon --}}

  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- My Style -->
  <link rel="stylesheet" href="{{asset('assets/style.css')}}">
</head>

<body>
  {{-- <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/beranda">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/datasiswa">Data Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/absen">Absen</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/register" class="nav-link"> <i class="bi bi-box-arrow-right"></i> Logout</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
  <!-- konten -->
  <div class="sidebar close">
    <div class="logo-details">
      <i class="bx bxs-heart-circle"></i>
      {{-- <img src="{{ asset('img/') }}" alt=""> --}}
      <span class="logo_name">Absen</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="/beranda">
          {{-- <i class='bx bx-home-alt'></i> --}}
          {{-- <img src="{{ asset('img/iconoir_home-simple-door.png') }}" alt=""> --}}
          <i class='bx bxs-dashboard'></i>
          <span class="link_name">Beranda</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/beranda">Beranda</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="/datasiswa">
            {{-- <i class='bx bx-book-alt' ></i> --}}
            {{-- <img src="{{ asset('img/Vector (10).png') }}" alt=""> --}}
            <i class="bi bi-list-check"></i>
            <span class="link_name">Data Siswa</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/datasiswa">Data Siswa</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="iocn-link">
          <a href="/absen">
            <i class="bi bi-person-check"></i>
            <span class="link_name">Absen</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="/absen">Absen</a></li>
          </ul>
        </div>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <a href="/profil">
              <img src="{{asset('img/image.jpg')}}" alt="">

            </a>

          </div>
          <div class="name-job">
            <div class="profile_name">{{Auth::user()->name}}</div>
            <div class="job">{{ Auth::user()->role }}</div>
          </div>
          <a href="/login"><i class='bx bx-log-in-circle'></i></a>

        </div>
      </li>
    </ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      {{-- <i class="bi bi-text-indent-left"></i> --}}

      <i class='bx bx-menu'></i>
      <span class="text"></span>

    </div>
    @yield('content')
  </section>

  {{-- <div class="maincontent">
        <h1 class="ms-4">APLIKASI ABSENSI</h1> --}}
  {{-- @yield('content') --}}

  {{-- </div> --}}

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>