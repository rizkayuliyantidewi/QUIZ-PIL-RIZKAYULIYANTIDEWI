@extends('template')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Absensi</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('absensis.index') }}"> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Anda salah menginputkan data absensi.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('absensis.store') }}" method="POST">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Waktu absen:</strong>
                <input type="text" name="waktu_absen" class="form-control" placeholder="Waktu Absen">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Mahasiswa:</strong>
                <input type="string" name="nama_mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Matakuliah:</strong>
                <input type="string" name="matakuliah" class="form-control" placeholder="Matakuliah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan</strong>
                <input type="string" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
@endsection

