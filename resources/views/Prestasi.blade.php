<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prestasi</title>
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
        <h2 class="text-center" style="margin-top: 50px;" >Prestasi</h2>
        <div class="mb-5"></div>
        <form>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Nama Prestasi </label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputNama" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Deskripsi</label>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3 col-sm-12">
                    <label for="inputTanggalMulai" class="form-label">Tahun</label>
                </div>
                <div class="col-md-6 col-ms-12">
                    <input type="date" id="inputTanggalMulai" class="form-control" placeholder="Tanggal Mulai">
                </div>
            </div>  

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3 col-sm-12">
                    <label for="inputTanggalMulai" class="form-label">Upload Sertifikat </label>
                </div>
                <div class="col-md-6">
                    <input type="file" class="form-control" aria-label="file example" required>
                    <div class="invalid-feedback">Example invalid form file feedback</div>
                </div>
            </div> 

            <div class="mb-4" style="margin-top: 20px;"></div>
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="submit" class="btn btn-primary custom-btn">Tambah Prestasi + </button>
                </div>
            </div>

            <div class="mb-4" style="margin-top: 80px;"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center mb-3">
                    <button type="submit" class="btn btn-primary btn-block">Kembali</button>
                </div>
                <div class="col-md-5 text-center mb-3 ms-6">
                    <button type="submit" class="btn btn-primary btn-block">Lanjut</button>
                </div>
            </div>

        </form>
    </div>
  </body>