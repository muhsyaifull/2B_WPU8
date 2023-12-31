@extends('layouts.test')

@section('title', 'Data Diri')
    @php
        $alamat = \DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $pendidikan = \DB::table('pendidikan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $idProfile = \DB::table('profile')->where('akun_id', auth()->id())->value('id') ?: '';
    @endphp
@section('content')
@if ($idProfile)
<main id="main">
  <div class="container">
    <div class="col-md-10">
      <section id="about" class="about">
        <img src="assets/img/Foto1.jpg" alt="Foto1" width="180" height="240" class="d-inline-block align-text-top">
        <div class="container">
          <div class="section-title">
            <h2>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('nama') ?: '' }}</h2>
            <p>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('deskripsi') ?: '' }}</p>
          </div>
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Data Diri</h3>
              {{-- <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p> --}}
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tempat, Tanggal Lahir:</strong> <span>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('tempat_lahir') ?: '' }},{{ \Carbon\Carbon::parse(\DB::table('profile')->where('akun_id', auth()->id())->value('tanggal_lahir') ?: '')->format('d-m-Y') }}                </span></li>
                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Domisili:</strong> Bandung <span></span></li> --}}
                    <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>{{strtolower($alamat->value('provinsi'))}}, {{ strtolower(str_replace('KABUPATEN ', '', ($alamat->value('kota')))) ?? '' }}, {{strtolower($alamat->value('kecamatan'))}}, {{strtolower($alamat->value('kelurahan'))}}, {{strtolower($alamat->value('dusun'))}}</li>
                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>New York, USA</span></li> --}}
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    {{-- <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan Terakhir:</strong> <span>Master</span></li> --}}
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('email') ?: '' }}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>No Telephone:</strong> <span>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('no_telepon') ?: '' }}</span></li>
                  </ul>
                </div>
              </div>
              
              <h3>Riwayat Pendidikan</h3>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    {{-- @dd(\DB::table('pendidikan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('jenjang')) --}}
                    <li><i class="bi bi-chevron-right"></i> <strong>Jenjang:</strong> <span>{{\DB::table('pendidikan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('jenjang')}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Nama Instansi:</strong> <span>{{strtolower($pendidikan->value('nama_sekolah'))}} </span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Lokasi:</strong> <span>{{strtolower($pendidikan->value('lokasi'))}} </span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Masuk:</strong> <span>{{strtolower($pendidikan->value('tanggal_masuk'))}} </span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lulus:</strong> <span>{{strtolower($pendidikan->value('tanggal_lulus'))}} </span></li>
                  </ul>
                </div>
  
              <h3>Riwayat Pekerjaan</h3>
              <h5>nama perusahaan</h5>
              <p>Tentang riwayat pekerjaan</p>
  
              <h3>Skill</h3>
              <h5>nama skill</h5>
              <p>deskripsi skill</p>
            </div>
          </div>
        </div>
      </section> 
    </div>
  </div>
@else
<h3>Isi Data Diri Terlebih dahulu</h3>
@endif

@endsection