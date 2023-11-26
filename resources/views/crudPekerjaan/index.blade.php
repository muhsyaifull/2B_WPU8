@extends('layouts.test') 
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pekerjaan.create') }}"> Add pekerjaan</a>
            </div>

        </div>
    </div>
	<br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif   
    <table class="table table-bordered">
        <tr>
            <th>Nama Perusahaan</th>
            <th>Posisi</th>
            <th>Lokasi</th>
			<th>Tanggal Masuk</th>
            <th>Tanggal Keluar</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');

            $pekerjaan = \DB::table('pekerjaan')
                ->where('user_id', $profileId)
                ->get();
        @endphp
        @foreach ($pekerjaan as $pekerjaan)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $pekerjaan->nama_perusahaan }}</td>
            <td>{{ $pekerjaan->posisi }}</td>
			<td>{{ $pekerjaan->lokasi }}</td>
            <td>{{ $pekerjaan->tanggal_masuk_kerja }}</td>
            <td>{{ $pekerjaan->tanggal_keluar_kerja }}</td>
            <td>
                <form action="{{ route('pekerjaan.destroy',$pekerjaan->id) }}" method="POST">   
                    {{-- <a href="{{ route('pekerjaan.show',$pekerjaan->id) }}"></a>     --}}
                    <a href="{{ route('pekerjaan.edit',$pekerjaan->id) }}"><button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button></a>  
                           
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {{-- {!! $pekerjaan->links() !!}       --}}
@endsection