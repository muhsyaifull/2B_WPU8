@extends('layouts.test')

@section('title', 'Data Diri')

@section('content')

<form action="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('id') ? url('/Update-Profile') : url('/Create-Profile') }}" method="POST">
    @csrf
    @if(\DB::table('profile')->where('akun_id', auth()->id())->value('id'))
        @method('PUT')
    @endif
    {{-- @php
        $provinsi = \DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('provinsi') ?: '';
        dd($provinsi);
    @endphp --}}
    <div class="container mb-3">
        <h2 class="text-center" style="margin-top: 50px;" >Data Diri</h2>
        <div class="mb-5"></div>
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
                    <input type="text" id="inputNama" class="form-control" aria-describedby="passwordHelpInline" name="nama" value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('nama') ?: '' }}">
                </div>
            </div>
            
            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                </div>
                <div class="col-md-6">
                    <textarea id="inputProfileDeskripsi" class="form-control" aria-describedby="passwordHelpInline" name="deskripsi" ></textarea>
                </div>
                <script>document.getElementById("inputProfileDeskripsi").value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('deskripsi') ?: '' }}";</script>
            </div>            

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTempatLahir" class="form-label">Tempat Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="inputTempatLahir" class="form-control" aria-describedby="passwordHelpInline" name="tempat_lahir" value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('tempat_lahir') ?: '' }}">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label for="inputTanggalLahir" class="form-label">Tanggal Lahir</label>
                </div>
                <div class="col-md-6">
                    <input type="date" id="inputTanggalLahir" class="form-control" aria-describedby="passwordHelpInline" name="tanggal_lahir" value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('tanggal_lahir') ?: '' }}">
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-3">
                    <label class="form-label">Jenis Kelamin</label>
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="jenis_kelamin" aria-label="Jenis_kelamin">
                        <option selected></option>
                        <option value="Laki-laki" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('jenis_kelamin')== 'Laki-laki' ? 'selected' : ''}} >Laki-laki</option>
                        <option value="Perempuan" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('jenis_kelamin')== 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
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
                        <option value="Islam" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('agama')== 'Islam' ? 'selected' : ''}}>Islam</option>
                        <option value="Kristen"{{ \DB::table('profile')->where('akun_id', auth()->id())->value('agama')== 'Kristen' ? 'selected' : ''}}>Kristen</option>
                        <option value="Hindu" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('agama')== 'Hindu' ? 'selected' : ''}}>Hindu</option>
                        <option value="Buddha" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('agama')== 'Buddha' ? 'selected' : ''}}>Buddha</option>
                        <option value="Katolik" {{ \DB::table('profile')->where('akun_id', auth()->id())->value('agama')== 'Katolik' ? 'selected' : ''}}>Katolik</option>
                    </select>
                </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label class="form-label">Alamat</label>
              </div>
              <div class="col-md-3">
                  <select id="provinsi" name="provinsi" class="form-select" aria-label="Provinsi">
                      <option value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('provinsi') ?: ''}}">
                        {{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('provinsi') ?: ''}}</option>
                      {{-- <option>Provinsi</option> --}}
                    </select>
              </div>
              <div class="col-md-3">
                  <select id="kota" name="kota" class="form-select" aria-label="Kab/Kota">
                      {{-- <option>Kab/Kota</option> --}}
                      <option value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kota') ?: ''}}">
                        {{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kota') ?: ''}}</option>
                  </select>
              </div>
            </div>
          
            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3"></div>
              <div class="col-md-3">
                  <select id="kecamatan" name="kecamatan" class="form-select" aria-label="Kecamatan">
                      {{-- <option>Kecamatan</option> --}}
                      <option value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kecamatan') ?: ''}}">
                        {{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kecamatan') ?: ''}}</option>
                  </select>
              </div>
              <div class="col-md-3">
                <select id="kelurahan" name="kelurahan" class="form-select" aria-label="Kecamatan">
                    {{-- <option>Kelurahan </option> --}}
                    <option value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kelurahan') ?: ''}}">
                        {{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('kelurahan') ?: ''}}</option>
                </select>
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="inputNama" class="form-label"></label>
              </div>
              <div class="col-md-6">
                  <input type="text" name="dusun" id="dusun" class="form-control" aria-describedby="passwordHelpInline" placeholder="Dusun"
                  value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('dusun') ?: ''}}">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="KodePos" class="form-label">Kode Pos</label>
              </div>
              <div class="col-md-6">
                  <input type="text" id="KodePos" class="form-control" name="poscode" pattern="[0-9]{5}" placeholder="Contoh: 12345" oninput="this.value = this.value.replace(/[^0-9-]/g, '');"
                  value="{{\DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('poscode') ?: ''}}">
              </div>
            </div>
          

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                  <label for="NomorTelepon" class="form-label">No. Telepon</label>
              </div>
              <div class="col-md-6">
                  <input type="tel" id="NomorTelepon" class="form-control" name="no_telepon" pattern="[0-9{12}" placeholder="Contoh: 082245981890" oninput="this.value = this.value.replace(/[^0-9-]/g, '');"
                  value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('no_telepon') ?: '' }}">
              </div>
            </div>

            <div class="row g-3 align-items-center mb-3">
              <div class="col-md-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
              </div>
              <div class="col-md-6">
                  <input type="email" id="inputNama" class="form-control" name="email" aria-describedby="passwordHelpInline" placeholder="name@contoh.com"
                  value="{{ \DB::table('profile')->where('akun_id', auth()->id())->value('email') ?: '' }}">
              </div>
            </div>
            
            <div class="mb-4" style="margin-top: 80px;"></div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 text-center mb-3 ms-2">
                    @if(\DB::table('profile')->where('akun_id', auth()->id())->value('id'))
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    @else
                        <button type="submit" class="btn btn-success btn-block">Create</button>
                    @endif
                </div>
                
           </div> 
</form>

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
@endsection