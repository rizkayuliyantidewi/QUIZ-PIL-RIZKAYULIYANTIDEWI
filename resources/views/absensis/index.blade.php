@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Data absensi</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('absensis.create') }}"> Create Data absensi</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
        
            <th width="20px" class="text-center">No</th>
            <th>Waktu absen</th>
            <th>Nama mahasiswa</th>
            <th>matakuliah</th>
            <th>Keterangan</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($absensis as $post)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $post->waktu_absen}}</td>
            <td>{{ $post->nama_mahasiswa}}</td>
            <td>{{ $post->matakuliah}}</td>
            <td>{{ $post->keterangan }}</td>
            <td class="text-center">
                <form action="{{ route('absensis.destroy',$post->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('absensis.show',$post->id) }}">Show</a>
 
                    <a class="btn btn-primary btn-sm" href="{{ route('absensis.edit',$post->id) }}">Edit</a>
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $absensis->links() !!}
 
@endsection
