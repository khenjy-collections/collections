@extends('layout.app')

@section('content')
    <h1 class="text-center text-danger  mt-5 ">Buat Challenge Anda</h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <form action="/challenge" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul Challenge:</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul Anda">
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="desc" class="d-block">Deskripsi:</label>
                        <textarea name="desc" id="desc" placeholder="Masukkan Deskripsi Challenge anda" cols="100" rows="4" ></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-danger">Kirim</button>
                </form>
            </div>
        </div>
    </div>
@endsection