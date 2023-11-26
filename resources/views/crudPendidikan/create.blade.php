@extends('layouts.test') 
@section('content')
    <br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Add Pendidikan</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pendidikan.index') }}"> Back</a>
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
    <form action="{{ route('pendidikan.store') }}" method="POST">
        @csrf  
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
            <div class="col-md-3 ">
                <p>Tanggal Masuk</p>
                <input type="date" id="inputTanggalMasuk" name="tanggal_masuk" class="form-control">
            </div>
            <div class="col-md-3">
                <p>Tanggal Lulus</p>
                <input type="date" id="inputTanggalLulus" name="tanggal_lulus" class="form-control" >
            </div>
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection