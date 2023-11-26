@extends('layouts.test') 
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pendidikan.create') }}"> Add Pendidikan</a>
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
            <th>Nama Sekolah</th>
            <th>Jenjang</th>
            <th>Lokasi</th>
			<th>Tanggal Masuk</th>
            <th>Tanggal Lulus</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');

            $pendidikan = \DB::table('pendidikan')
                ->where('user_id', $profileId)
                ->get();
        @endphp
        
        @foreach ($pendidikan as $pendidikan)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $pendidikan->nama_sekolah }}</td>
            <td>{{ $pendidikan->jenjang }}</td>
			<td>{{ $pendidikan->lokasi }}</td>
            <td>{{ $pendidikan->tanggal_masuk }}</td>
            <td>{{ $pendidikan->tanggal_lulus }}</td>
            <td>
                <form action="{{ route('pendidikan.destroy',$pendidikan->id) }}" method="POST">   
                    {{-- <a href="{{ route('pendidikan.show',$pendidikan->id) }}"></a>     --}}
                    <a href="{{ route('pendidikan.edit',$pendidikan->id) }}"><button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button></a>  
                           
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {{-- {!! $pendidikan->links() !!}       --}}
@endsection