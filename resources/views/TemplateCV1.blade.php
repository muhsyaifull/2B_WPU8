@extends('layouts.test')

@section('title', 'Data Diri')
    @php
        $alamat = \DB::table('alamat')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $pendidikan = \DB::table('pendidikan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $pekerjaan = \DB::table('pekerjaan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $skill = \DB::table('skill')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'));
        $idProfile = \DB::table('profile')->where('akun_id', auth()->id())->value('id') ?: '';
    @endphp
@section('content')
@if ($idProfile)
<main id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-10" style="background-color: white">
        <section id="about" class="about">
          <img src="{{asset('imageUser/'. \DB::table('profile')->where('akun_id', auth()->id())->value('image_path'))}}" alt="Foto1" width="180" height="240" class="d-inline-block align-text-top">
          <div class="container">

            <div class="section-title">
              <h2>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('nama') ?: '' }}</h2>
              <p>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('deskripsi') ?: '' }}</p>
              <br>
              <p>{{ \DB::table('profile')->where('akun_id', auth()->id())->value('tempat_lahir') ?: '' }},{{ \Carbon\Carbon::parse(\DB::table('profile')->where('akun_id', auth()->id())->value('tanggal_lahir') ?: '')->format('d-m-Y') }}</p>
            </div>

            <div class="row">
              <div class="col-lg-4" data-aos="fade-right">
                <img src="" class="img-fluid" alt="">
              </div>
              <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3 class="bg-subtitlecv font-subjudul">Kontak</h3>
                {{-- <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}
                <div class="row">
                  <div class="col-lg-6">
                    <ul>
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

                {{-- RIWAYAT PENDIDIKAN --}}
                <div class="riwayat-pendidikan mt-4">
                  <h3 class="bg-subtitlecv font-subjudul">Riwayat Pendidikan</h3>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        @foreach(\DB::table('pendidikan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->get() as $pendidikan)
                        <li style="margin-top: 10px;">
                            <li><i class="bi bi-chevron-right"></i> <strong>Nama Instansi :</strong><span class="text-besar bold">{{ strtolower($pendidikan->nama_sekolah) }} </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Jenjang :</strong> <span>{{ strtolower($pendidikan->jenjang) }}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Lokasi :</strong> <span>{{ strtolower($pendidikan->lokasi) }} </span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Masuk - Tanggal Lulus : </strong> <span>( {{ strtolower($pendidikan->tanggal_masuk) }} ) - ( {{ strtolower($pendidikan->tanggal_lulus) }} )</span></li>
                        @endforeach

                      </ul>
                    </div>
                </div>
                {{-- AKHIR RIWAYAT PENDIDIKAN --}}
                
                {{-- RIWAYAT PEKERJAAN --}}
                {{-- @if (\DB::table('pekerjaan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->exists()) --}}
                <div class="riwayat-pekerjaan mt-4">
                  <h3 class="bg-subtitlecv font-subjudul">Riwayat Pekerjaan</h3>
                  <div class="row">
                  <div class="col-lg-6">
                    <ul>
                      @foreach(\DB::table('pekerjaan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->get() as $pekerjaan)
                      {{-- @dd(\DB::table('pekerjaan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('nama_perusahaan')) --}}
                      <li style="margin-top: 10px;">
                      <li><i class="bi bi-chevron-right"></i> <strong>Nama Perusahaan:</strong> <span>{{$pekerjaan->nama_perusahaan}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Nama Posisi:</strong> <span>{{$pekerjaan->posisi}}</span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Lokasi:</strong> <span>{{$pekerjaan->lokasi}} </span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Masuk:</strong> <span>{{$pekerjaan->tanggal_masuk_kerja}} </span></li>
                      <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lulus:</strong> <span>{{$pekerjaan->tanggal_keluar_kerja}} </span></li>
                      @endforeach
                    </ul>
                  </div>
                </div>
                {{-- @endif --}}
                
                {{-- AKHIR RIWAYAT PEKERJAAN --}}
    
                {{-- SKILL --}}
                <div class="skill mt-4">
                  <h3 class="bg-subtitlecv font-subjudul">Skill</h3>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        @foreach(\DB::table('skill')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->get() as $skill)
                        {{-- @dd(\DB::table('pekerjaan')->where('user_id', \DB::table('profile')->where('akun_id', auth()->id())->value('id'))->value('nama_perusahaan')) --}}
                        <li style="margin-top: 10px;">
                        <li><i class="bi bi-chevron-right"></i> <strong>Nama Skill:</strong> <span>{{$skill->nama_skill}}</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Deskripsi:</strong> <span>{{$skill->deskripsi_skill}} </span></li>
                        @endforeach
                      </ul>
                    </div>
                </div>
                {{-- AKHIR SKILL --}}

              </div>
            </div>
          </div>
        </section> 
      </div>
    </div>
  </div>
@else
<h3>Isi Data Diri Terlebih dahulu</h3>
@endif

@endsection