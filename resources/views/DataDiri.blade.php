<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CLIV</title>
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
                <img src="assets/img/Logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                CLIV
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        </div>
    </nav>
    <div class="container mb-3">
        <h2 class="text-center" style="margin-top: 50px;" >Data Diri</h2>
        <div class="mb-5"></div>
        <form>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputNama" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputTempatLahir" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="date" id="inputTanggalLahir" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Agama</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" aria-label="Agama">
                        <option selected>Agama</option>
                        <option value="1">Islam</option>
                        <option value="2">Kristen</option>
                        <option value="3">Hindu</option>
                        <option value="4">Buddha</option>
                        <option value="5">Katolik</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label class="form-label">Alamat</label>
              </div>
              <div class="col-md-3">
                  <select id="provinsi" name="provinsi" class="form-select" aria-label="Provinsi">
                      <option>Provinsi</option>
                  </select>
              </div>
              <div class="col-md-3">
                  <select id="kota" name="kota" class="form-select" aria-label="Kab/Kota">
                      <option>Kab/Kota</option>
                  </select>
              </div>
            </div>
          
            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                  <select id="kecamatan" name="kecamatan" class="form-select" aria-label="Kecamatan">
                      <option>Kecamatan</option>
                  </select>
              </div>
              <div class="col-md-3">
                <select id="kelurahan" name="kelurahan" class="form-select" aria-label="Kecamatan">
                    <option>Kelurahan </option>
                </select>
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="inputNama" class="form-label"></label>
              </div>
              <div class="col-md-6">
                  <input type="text" id="inputNama" class="form-control" aria-describedby="passwordHelpInline" placeholder="Dusun">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="KodePos" class="form-label">Kode Pos</label>
              </div>
              <div class="col-md-6">
                  <input type="text" id="KodePos" class="form-control" pattern="[0-9]{5}" placeholder="Contoh: 12345" oninput="this.value = this.value.replace(/[^0-9-]/g, '');">
              </div>
            </div>
          

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="NomorTelepon" class="form-label">No. Telepon</label>
              </div>
              <div class="col-md-6">
                  <input type="tel" id="NomorTelepon" class="form-control" pattern="[0-9{12}" placeholder="Contoh: 082245981890" oninput="this.value = this.value.replace(/[^0-9-]/g, '');">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
              </div>
              <div class="col-md-6">
                  <input type="email" id="inputNama" class="form-control" aria-describedby="passwordHelpInline" placeholder="name@contoh.com">
              </div>
            </div>

            <script>
              fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(provinces => {
                  var data = provinces;
                  var tampung = '<option>Provinsi</option>';
                  data.forEach(element => {
                    tampung += `<option data-reg="${element.id}" value="${element.name}">${element.name}</option>`;
                  });
                  document.getElementById('provinsi').innerHTML = tampung;
                });
            </script>
            
            <script>
              const selectProvinsi = document.getElementById('provinsi');
              selectProvinsi.addEventListener('change', (e) => {
                  var provinsi = e.target.options[e.target.selectedIndex].dataset.reg;
                  fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/regencies/${provinsi}.json`)
                    .then(response => response.json())
                    .then(regencies => {
                        var data = regencies;
                        var tampung = '<option>Kab/Kota</option>';
                        document.getElementById('kota').innerHTML = '<option>Kab/Kota</option>';
                        document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option>Kelurahan</option>';
                        data.forEach(element => {
                            tampung += `<option data-dist="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById('kota').innerHTML = tampung;
                    });
              });

              const selectKota = document.getElementById('kota');
              selectKota.addEventListener('change', (e) => {
                  var kota = e.target.options[e.target.selectedIndex].dataset.dist;
                  fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/districts/${kota}.json`)
                    .then(response => response.json())
                    .then(districts => {
                        var data = districts;
                        var tampung = '<option>Kecamatan</option>';
                        document.getElementById('kecamatan').innerHTML = '<option>Kecamatan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option>Kelurahan</option>';
                        data.forEach(element => {
                            tampung += `<option data-vill="${element.id}" value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById('kecamatan').innerHTML = tampung;
                    });
              });

              const selectKecamatan = document.getElementById('kecamatan');
              selectKecamatan.addEventListener('change', (e) => {
                  var kecamatan = e.target.options[e.target.selectedIndex].dataset.vill;
                  fetch(`https://kanglerian.github.io/api-wilayah-indonesia/api/villages/${kecamatan}.json`)
                    .then(response => response.json())
                    .then(villages => {
                        var data = villages;
                        var tampung = '<option>Kelurahan</option>';
                        document.getElementById('kelurahan').innerHTML = '<option>Kelurahan</option>';
                        data.forEach(element => {
                            tampung += `<option value="${element.name}">${element.name}</option>`;
                        });
                        document.getElementById('kelurahan').innerHTML = tampung;
                    });
              });
            </script>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
