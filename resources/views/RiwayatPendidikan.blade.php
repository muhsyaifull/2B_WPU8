<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Riwayat Pendidikan</title>
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap-icons">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                CLIV
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center" style="margin-top: 50px;" >Riwayat Pendidikan</h2>
        <div class="mb-5"></div>
        <form>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Jenjang</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Agama">
                        <option selected></option>
                        <option value="1">SD</option>
                        <option value="2">SMP</option>
                        <option value="3">SMA/SMK</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Asal Sekolah</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputNama" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Lokasi</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputNama" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3 col-sm-12">
                    <label for="inputTanggalMulai" class="form-label">Waktu</label>
                </div>
                <div class="col-md-3 col-ms-12" aria-placeholder="Tanggal Mulai">
                    <p>Tanggal Mulai</p>
                    <input type="date" id="inputTanggalMulai" class="form-control" placeholder="Tanggal Mulai">
                </div>
                <div class="col-md-3">
                    <p>Tanggal Selesai</p>
                    <input type="date" id="inputTanggalSelesai" class="form-control" >
                </div>
            </div>  

            <div class="mb-4" style="margin-top: 20px;"></div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="submit" class="btn btn-primary custom-btn">Tambah Riwayat Pendidikan + </button>
                </div>
            </div>

            <div class="mb-4" style="margin-top: 80px;"></div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Lanjut </button>
                </div>
            </div>

        </form>
    </div>
  </body>