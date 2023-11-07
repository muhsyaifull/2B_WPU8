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

    <style>
        hr {
            border: 3px solid rgb(111, 111, 126);
        }
    </style>
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
        <form action="{{ url('cliv')}}" method="POST">
            @csrf
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputImage" class="form-label">Upload Image</label>
                </div>
                <div class="col-md-6">
                    <input type="file" id="inputImage" class="form-control" name="image" accept="image/*">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputNama" class="form-control" aria-describedby="passwordHelpInline" name="nama"
                    value="{{ isset($profile) ? $profile->nama : '' }}">
                </div>
            </div>
            
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                </div>
                <div class="col-md-6">
                    <textarea id="inputDeskripsi" class="form-control" aria-describedby="passwordHelpInline" name="deskripsi"></textarea>
                </div>
            </div>            

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputTempatLahir" class="form-control" aria-describedby="passwordHelpInline" name="tempat_lahir">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="date" id="inputTanggalLahir" class="form-control" aria-describedby="passwordHelpInline" name="tanggal_lahir">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="jenis_kelamin" aria-label="Jenis_kelamin">
                        <option selected></option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Agama</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="agama" aria-label="Agama">
                        <option selected></option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Katolik">Katolik</option>
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
                  <input type="text" name="dusun" id="dusun" class="form-control" aria-describedby="passwordHelpInline" placeholder="Dusun">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="KodePos" class="form-label">Kode Pos</label>
              </div>
              <div class="col-md-6">
                  <input type="text" id="KodePos" class="form-control" name="poscode" pattern="[0-9]{5}" placeholder="Contoh: 12345" oninput="this.value = this.value.replace(/[^0-9-]/g, '');">
              </div>
            </div>
          

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="NomorTelepon" class="form-label">No. Telepon</label>
              </div>
              <div class="col-md-6">
                  <input type="tel" id="NomorTelepon" class="form-control" name="no_telepon" pattern="[0-9{12}" placeholder="Contoh: 082245981890" oninput="this.value = this.value.replace(/[^0-9-]/g, '');">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
              </div>
              <div class="col-md-6">
                  <input type="email" id="inputNama" class="form-control" name="email" aria-describedby="passwordHelpInline" placeholder="name@contoh.com">
              </div>
            </div>
            
            <hr class="mt-5">

            {{-- pedidikan --}}
            <div id="riwayat-pendidikan-container">
                <!-- Formulir Riwayat Pendidikan Awal -->
                <div class="riwayat-pendidikan">
                  <div class="row g-3 align-items-center mb-3">
                    <h2 class="text-center" style="margin-top: 50px;">Riwayat Pendidikan</h2>
                    <div class="col-md-3">
                      <label class="form-label">Jenjang</label>
                    </div>
                    <div class="col-md-6">
                      <select class="form-select" name="jenjang" aria-label="Jenjang">
                        <option selected></option>
                        <option value="SD">SD</option>
                        <option value="SMP">SMP</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                      </select>
                    </div>
                  </div>
              
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-md-3">
                      <label for="inputNama" class="form-label">Nama Sekolah</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="nama_sekolah" name="nama_sekolah" aria-label="Nama_sekolah" class="form-control">
                    </div>
                  </div>
              
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-md-3">
                      <label for="inputNama" class="form-label">Lokasi</label>
                    </div>
                    <div class="col-md-6">
                      <input type="text" id="lokasi" name="lokasi" aria-label="Lokasi" class="form-control">
                    </div>
                  </div>
              
                  <div class="row g-3 align-items-center mb-3">
                    <div class="col-md-3 col-sm-12">
                      <label for="inputTanggalMulai" class="form-label">Waktu</label>
                    </div>
                    <div class="col-md-3">
                      <p>Tanggal Masuk</p>
                      <input type="date" id="inputTanggalMasuk" name="tanggal_mulai" class="form-control">
                    </div>
                    <div class="col-md-3">
                      <p>Tanggal Lulus</p>
                      <input type="date" id="inputTanggalLulus" name="tanggal_lulus" class="form-control">
                    </div>
                  </div>
                </div>
                <!-- Akhir Formulir Riwayat Pendidikan -->
              
                {{-- <div class="mb-4" style="margin-top: 20px;"></div>
                <div class="row">
                  <div class="col-md-3"></div>
                  <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="button" id="tambahRiwayat" class="btn btn-primary custom-btn">Tambah Riwayat Pendidikan +</button>
                  </div>
                </div>
              </div>  --}}

            <hr class="mt-5">

            {{-- riwayat pekerjaan --}}
            
            <div class="row g-3 align-items-center mb-3">
                <h2 class="text-center" style="margin-top: 50px;" >Riwayat Pekerjaan</h2>
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Nama Perusahaan</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" aria-label="Nama_perusahaan" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Posisi</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="posisi" name="posisi" aria-label="Posisi" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Lokasi</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="lokasi" name="lokasi" aria-label="Lokasi" class="form-control">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3 col-sm-12">
                    <label for="inputTanggalMulai" class="form-label">Waktu</label>
                </div>
                <div class="col-md-3 ">
                    <p>Tanggal Masuk</p>
                    <input type="date" id="inputTanggalMasukkerja" name="tanggal_mulai_kerja" class="form-control">
                </div>
                <div class="col-md-3">
                    <p>Tanggal Keluar</p>
                    <input type="date" id="inputTanggalKeluaarKerja" name="tanggal_keluar_kerja" class="form-control" >
                </div>
            </div>  

            <div class="mb-4" style="margin-top: 20px;"></div>
            {{-- <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="submit" class="btn btn-primary custom-btn">Tambah Riwayat Pekerjaan + </button>
                </div>
            </div> --}}

            <hr class="mt-5">

            <div class="row g-3 align-items-center mb-3">
                <h2 class="text-center" style="margin-top: 50px;" >Skill</h2>
                <div class="col-md-3">
                    <label for="inputNama" class="form-label">Nama</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="nama_skill" name="nama_skill" aria-label="Nama_skill" class="form-control">
                </div>
            </div>
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                </div>
                <div class="col-md-6">
                    <textarea id="inputDeskripsiSkill" class="form-control" aria-describedby="passwordHelpInline" name="deskripsi_skill"></textarea>
                </div>
            </div> 
            <div class="mb-4" style="margin-top: 20px;"></div>
            {{-- <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-3">
                    <button type="submit" class="btn btn-primary custom-btn">Tambah Skill + </button>
                </div>
            </div>    --}}



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
                    <div class="col-md-5 text-center mb-3 ms-2">
                        <button type="submit" class="btn btn-primary btn-block">Selesai</button>
                    </div>
                </div> 

        </form>

            {{-- <script>
                // Fungsi untuk menambahkan formulir riwayat pendidikan baru
                document.getElementById("tambahRiwayat").addEventListener("click", function () {
                const riwayatPendidikanContainer = document.getElementById("riwayat-pendidikan-container");
                const newRiwayatPendidikan = document.querySelector(".riwayat-pendidikan").cloneNode(true);
                riwayatPendidikanContainer.insertBefore(newRiwayatPendidikan, riwayatPendidikanContainer.lastElementChild);
                });
            </script> --}}

            <script>
                // Inisialisasi array untuk menyimpan data riwayat pendidikan
                const riwayatPendidikanArray = [];
              
                // Fungsi untuk menambahkan formulir riwayat pendidikan baru
                document.getElementById("tambahRiwayat").addEventListener("click", function () {
                  const riwayatPendidikanContainer = document.getElementById("riwayat-pendidikan-container");
                  const newRiwayatPendidikan = document.querySelector(".riwayat-pendidikan").cloneNode(true);
                  riwayatPendidikanContainer.insertBefore(newRiwayatPendidikan, riwayatPendidikanContainer.lastElementChild);
              
                  // Dapatkan data dari formulir yang baru ditambahkan
                  const newRiwayatPendidikanData = {
                    // Ganti ini dengan cara Anda mendapatkan data dari formulir, misalnya:
                    institusi: newRiwayatPendidikan.querySelector(".institusi-input").value,
                    jenjang: newRiwayatPendidikan.querySelector(".jenjang-input").value,
                    tahunLulus: newRiwayatPendidikan.querySelector(".tahun-lulus-input").value,
                  };
              
                  // Tambahkan data baru ke dalam array
                  riwayatPendidikanArray.push(newRiwayatPendidikanData);
              
                  // Anda bisa melakukan apa pun yang Anda inginkan dengan data ini, seperti menyimpannya atau menampilkan di halaman
                  console.log("Data Riwayat Pendidikan Baru:", newRiwayatPendidikanData);
                  console.log("Seluruh Data Riwayat Pendidikan:", riwayatPendidikanArray);
                });
              </script>
              

            <div class="mb-4" style="margin-top: 80px;"></div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5 text-center mb-3">
                        <a href="{{ route('DaftarCV') }}">
                            <button id="tombolKembali" class="btn btn-primary btn-block">Kembali</button>
                        </a>
                    </div> 
                </div>       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
