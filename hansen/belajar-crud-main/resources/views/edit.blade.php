@extends('layouts.app')

@section('content')
    <h3>Ubah Data Pegawai</h3>
    <form action="/updateData/{{ $data->id }}" method="POST">
        @csrf
        <div class="mb-3 lg-8">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">

            <label for="exampleInputEmail1" class="form-label">Alamat Sekarang</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">

            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllhr" name="tgllhr" value="{{ $data->tgllhr }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
@endsection
