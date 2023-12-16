@extends('layouts.app')

@section('content')
    <form action="/daftar" method="post">
        @csrf
        @if (session('success'))
            <h1>{{ session('success') }}</h1>
        @endif

        <div class="mb-3 lg-8">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="nama" class="form-control" id="nama" name="nama">

            <label for="exampleInputEmail1" class="form-label">Alamat Sekarang</label>
            <input type="text" class="form-control" id="alamat" name="alamat">

            <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl" name="tgllhr">
        </div>
        <button class="btn btn-primary" type="submit">Daftar Sekarang</button>
    </form>
@endsection
