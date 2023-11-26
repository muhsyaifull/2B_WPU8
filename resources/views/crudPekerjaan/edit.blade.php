@extends('layouts.test') 
   
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Edit Product</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pekerjaan.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('pekerjaan.update',$pekerjaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3 align-items-center mb-3">
            <h2 class="text-center" style="margin-top: 50px;" >Riwayat Pekerjaan</h2>
            <div class="col-md-3">
                <label for="inputNama" class="form-label">Nama Perusahaan</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="nama_perusahaan" name="nama_perusahaan" value="{{ $pekerjaan->nama_perusahaan }}" aria-label="Nama_perusahaan" class="form-control">
            </div>
        </div>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-md-3">
                <label for="inputNama" class="form-label">Posisi</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="posisi" name="posisi" value="{{ $pekerjaan->posisi }}" aria-label="Posisi" class="form-control">
            </div>
        </div>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-md-3">
                <label for="inputNama" class="form-label">Lokasi</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="lokasi" name="lokasi" value="{{ $pekerjaan->lokasi }}" aria-label="Lokasi" class="form-control">
            </div>
        </div>

        <div class="row g-3 align-items-center mb-3">
            <div class="col-md-3 col-sm-12">
                <label for="inputTanggalMulai" class="form-label">Waktu</label>
            </div>
            <div class="col-md-3 ">
                <p>Tanggal Masuk</p>
                <input type="date" id="inputTanggalMasukkerja" name="tanggal_masuk_kerja" value="{{ $pekerjaan->tanggal_masuk_kerja }}" class="form-control">
            </div>
            <div class="col-md-3">
                <p>Tanggal Keluar</p>
                <input type="date" id="inputTanggalKeluaarKerja" name="tanggal_keluar_kerja" value="{{ $pekerjaan->tanggal_keluar_kerja }}" class="form-control" >
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
   
    </form>
@endsection