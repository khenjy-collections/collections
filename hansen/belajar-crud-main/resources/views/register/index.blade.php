@extends('layouts.app')

@section('content')
    <form action="/register" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Register For Free</h1>

        <div class="form-floating">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">
            <label for="email">Email Address</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-success" type="submit">Register</button>
        <p>Sudah punya akun? <a href="/login">Login</a></p>
    </form>
@endsection
