@extends('layout.app')

@section('content')

<div class="container d-flex flex-column justify-content-center my-5">

<form action='/daftar' method="post">
  @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Nama: </label>
        <input type="text" class="form-control" id="exampleInputName" name="name" required>
      </div>
    <div class="mb-3">
      <label for="exampleInputUsername" class="form-label">Nama Pengguna:</label>
      <input type="text" class="form-control" id="exampleInputUsername" name="username" required >
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

@endsection