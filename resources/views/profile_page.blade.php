<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLIV Website</title>
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-icons">
    
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}"> --}}

  </head>

  <style>
    body{
        background-color: rgb(174, 172, 172)
    }
  </style>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3 shadow p-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="assets/img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            CLIV</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item ms-5">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="ms-3">
                <form class="d-flex p-search" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                  </form>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
          </div>
          @guest
          <a href="{{ route('login-page') }}" class="btn btn-outline-secondary">Login</a>
          <a href="{{ route('register-page') }}" class="btn btn-primary ms-3" role="button">SignUp </a>
          @else
          <a href="{{ route('logout') }}" class="btn btn-outline-secondary">Logout</a>
          @endguest
        </div>
    </nav>

    {{-- Info profile --}}
    <div class="infoProfile bg-light mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1 bgc-abu2"></div>
                
                <div class="col-md-2">
                    <div class="text-center">
                        <img class="borCircle mt-3 mb-3" width="180rem" src="assets/img/conto.jpeg" alt="">
                    </div>
                </div>

                <div class="col-md-6">
                  <div class="mt-5">
                      <ul>
                          <li class="mt-3 list-d-n"><h2>{{ $profile->nama }}</h2></li>
                          <li class="mb-3 mt-1 list-d-n"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dolorem est doloremque ratione, eligendi soluta impedit. Odit corrupti obcaecati cum, quia corporis sit neque sint. Voluptate optio totam laudantium labore nisi fugiat voluptates deserunt! Perspiciatis consequatur reiciendis ea, exercitationem totam eligendi tenetur excepturi, quod sapiente, tempore voluptate distinctio nulla qui architecto corporis mollitia necessitatibus nesciunt nisi aliquam iusto. Repellat at dolor modi inventore fuga, molestiae </p></li>
                          <li class="mt-1 list-d-n fc-abu"><p>{{ $profile->agama }}</p></li>
                          <li class="mt-1 list-d-n fc-abu"><p>{{ $profile->alamat }}</p></li>
                          <li class="mt-1 list-d-n fc-abu"><p>{{ $profile->no_telepon }} | {{ $profile->email }}</p></li>
                      </ul>
                  </div>
              </div>

                <div class="col-md-2 align-items-center">
                    <ul>
                        <li class="mt-3 mb-3 list-d-n"><a class="btn btn-primary btn-width1" href="/DataDiri" role="button">Edit Profil</a></li>
                        {{-- <li class="mb-3 mt-1 list-d-n"><a class="btn btn-primary btn-width1" href="{{ route('resume.showProfile', ['profile_id' => $profile->id]) }}" role="button">Lihat CV</a> --}}
                        </li>
                        <li class="mb-3 mt-1 list-d-n"><a class="btn btn-primary btn-width1" href="/resume" role="button">Buat CV</a></li>
                    </ul>
                </div>

                <div class="col-md-1 bgc-abu2"></div>
            </div>
        </div>
    </div>

    {{-- Riwayat Pendidikan Dan Prestasi --}}
    <div class="PendidikanDanPrestasi mt-1 d-flex flex-row">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-1 bgc-abu2"></div>
          <div class="col-md-5 bg-light riwayatPendidikan">
            <h2 class="mt-2 mb-1">RIWAYAT PENDIDIKAN</h2>
            <hr>
            <ul>
              <li class="mt-1 list-d-n"><h3>SMK NEGERI 1 BANDUNG</h3></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>Rekayasa Perangkat Lunak</h6></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>Jalan Ganesha No.1</h6></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>2019-2022</h6></li>
            </ul>
            <ul>
              <li class="mt-1 list-d-n"><h3>SMP NEGERI 1 BANDUNG</h3></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6> - </h6></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>Jalan Ganesha No.1</h6></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>2019-2022</h6></li>
            </ul>
          </div>

          <div class="col-md-5 bg-light Organisasi ms-1 ">
            <h2 class="mt-2 mb-1">PRESTASI</h2>
            <hr>
            <ul>
              <li class="mt-1 list-d-n"><h3>Juara 1 Lomba LKS</h3></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore eveniet odit in dignissimos repellat error fuga magnam ipsum deleniti. Eveniet tempora impedit hic</p></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>2022</h6></li>
              <li class="mb-3 mt-1 list-d-n fc-abu"><h6>2022</h6></li>
            </ul>
          </div>
          <div class="col-md-1 bgc-abu2"></div>
        </div>
      </div>
    </div>
    


    {{-- Organisasi --}}
    {{-- <div class="organisasi mt-1 d-flex flex-row">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>

              <div class="col-md-10 bg-light Organisasi">
                <h2 class="mt-2 mb-1">ORGANISASI</h2>
                <hr>
                <ul>
                  <li class="mt-1 list-d-n"><h3>OSIS</h3></li>
                  <li class="mb-3 mt-1 list-d-n fc-abu"><h6>Ketua Osis</h6></li>
                  <li class="mb-3 mt-1 list-d-n fc-abu"><h6>2019-2022</h6></li>
                  <li class="mb-3 mt-1 list-d-n fc-abu"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore eveniet odit in dignissimos repellat error fuga magnam ipsum deleniti. Eveniet tempora impedit hic ipsa ullam quidem vel mollitia quo, rem consequatur? Recusandae hic, voluptatibus mollitia quidem tempore exercitationem? Quis.</p></li>
                  <li class="mb-3 mt-1 list-d-n fc-abu"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt dolore eveniet odit in dignissimos repellat error fuga magnam ipsum deleniti. Eveniet tempora impedit hic ipsa ullam quidem vel mollitia quo, rem consequatur? Recusandae hic, voluptatibus mollitia quidem tempore exercitationem? Quis.</p></li>
                </ul>
              </div>

              <div class="col-md-1"></div>
            </div>
        </div>
    </div> --}}

    {{-- Footer --}}
    <footer>
       <div class="container-fluid bgc-abu1">
            <center>
                <div class="row padt3"><h6 class="f-libre"> 2023 | Tim WP 8 Proyek 3</h6></div>
            </center>
        </div> 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>