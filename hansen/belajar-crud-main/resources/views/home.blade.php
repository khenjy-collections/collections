@extends('layouts.app')

@section('content')
    @foreach ($data as $items)
        @if (count($data))
            <div class="card">
                <ul class="card-ul">
                    <div class="card-item">
                        <i class="fa-solid fa-user"></i>
                        <td>Nama : {{ $items->nama }}</td>
                    </div>
                    <div class="card-item">
                        <i class="fa-solid fa-phone"></i>
                        <td>Alamat : {{ $items->alamat }}</td>
                    </div>
                    <div class="card-item">
                        <i class="fa-solid fa-phone"></i>
                        <td>Tanggal Lahir : {{ $items->tgllhr }}</td>
                    </div>
                </ul>
                <ul class="d-flex">
                    <button>
                        <a href="/editData/{{ $items->id }}">EDIT</a>
                    </button>
                    <button>
                        <a href="/delete/{{ $items->id }}">DELETE</a>
                    </button>
                </ul>
            </div>
        @else
            <h1>Data Pegawai tidak ditemukan</h1>
        @endif
    @endforeach
@endsection
