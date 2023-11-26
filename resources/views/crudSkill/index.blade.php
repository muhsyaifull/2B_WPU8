@extends('layouts.test') 
@section('content')
	<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">                
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('skill.create') }}"> Add Skill</a>
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
            <th>Nama Skill</th>
            <th>Deskripsi Skill</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $profileId = \DB::table('profile')->where('akun_id', auth()->id())->value('id');

            $skill = \DB::table('skill')
                ->where('user_id', $profileId)
                ->get();
        @endphp
        @foreach ($skill as $skill)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $skill->nama_skill }}</td>
            <td>{{ $skill->deskripsi_skill}}</td>
            <td>
                <form action="{{ route('skill.destroy',$skill->id) }}" method="POST">   
                    {{-- <a href="{{ route('skill.show',$skill->id) }}"></a>     --}}
                    <a href="{{ route('skill.edit',$skill->id) }}"><button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button></a>  
                           
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {{-- {!! $skill->links() !!}       --}}
@endsection