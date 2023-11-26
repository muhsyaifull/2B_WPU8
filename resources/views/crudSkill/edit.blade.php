@extends('layouts.test') 
   
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h4>Edit Skill</h4>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skill.index') }}"> Back</a>
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
  
    <form action="{{ route('skill.update',$skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3 align-items-center mb-3">
            <h2 class="text-center" style="margin-top: 50px;" >Skill</h2>
            <div class="col-md-3">
                <label for="inputNama" class="form-label">Nama</label>
            </div>
            <div class="col-md-6">
                <input type="text" id="nama_skill" name="nama_skill" value="{{ $skill->nama_skill }}" aria-label="Nama_skill" class="form-control">
            </div>
        </div>
        <div class="row g-3 align-items-center mb-3">
            <div class="col-md-3">
                <label for="inputDeskripsi" class="form-label">Deskripsi</label>
            </div>
            <div class="col-md-6">
                <textarea id="inputDeskripsiSkill" class="form-control" aria-describedby="passwordHelpInline" name="deskripsi_skill"></textarea>
            </div>
            <script>
                document.getElementById('inputDeskripsiSkill').value = {{ $skill->nama_skill }};
            </script>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-left">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
@endsection