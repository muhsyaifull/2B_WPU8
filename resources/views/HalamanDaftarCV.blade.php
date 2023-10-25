<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLIV Website</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-icons">
  </head>
  <body>

    @include('component.navbarUser')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>

            <div class="col-md-10">
                <div class="daftarCV d-flex align-content-start flex-wrap">
                    <div class="daftar2CV d-flex align-content-start flex-wrap">
                        @php
                        for ($i=0; $i < 5; $i++) { 
                        @endphp
                            <div class="card-inner mt-3 ms-3">
                                <div class="text-center">
                                    <button class="btn btn-success btn-width2 mb-2 mt-5">Lihat CV</button>
                                    <button class="btn btn-primary btn-width2 mb-2">Edit CV</button>
                                    <button class="btn btn-danger btn-width2 mb-2">Hapus CV</button>
                                </div>
                            </div>
                        @php     
                            }
                        @endphp
                    </div>
    
                    <div class="tambahCV d-flex align-content-start flex-wrap">
                        <div class="card-tambah bg-tambah mt-3 ms-3">
                            <div class="text-center">
                                <a href="{{ route('DataDiri') }}"><button class="btn btn-success btn-width mb-2 mt-5 tombolTambahCV"><i class="bi bi-plus-circle-fill"></i></button></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-md-1"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>