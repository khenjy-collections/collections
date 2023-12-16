@extends('layout.app')

@section('content')

    <h1 class="text-center mt-3 text-danger">Challenge</h1>
    @auth
    <a href="/create" class="btn btn-danger ms-4">Tambah Challenge Baru</a>
    @endauth
    <div class="container">
        <div class="row d-flex justify-content-center ">
            @foreach($challenges as $data)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/' . $data->image) }}" alt="{{ $data->title}}" width="100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p class="card-text">{{ $data->desc }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection