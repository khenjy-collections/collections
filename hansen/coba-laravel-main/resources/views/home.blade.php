@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')
            <h1>ini Halaman Home</h1>
            <h2>Selamat Datang, {{ $nama }}. Anda adalah {{ $role }}</h2>

           <table class="table">
            <tr>
                <th>No</th>
                <td>Nama</td>
            </tr>
            @foreach($buah as $data)
            <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $data}}</td>
            </tr>
            @endforeach
           </table>
@endsection