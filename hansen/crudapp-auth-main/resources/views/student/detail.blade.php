@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center fw-bold">Student Detail</h1>
        @foreach ($datas as $student)
            <hr>
            <p>First Name : {{ $student->first_name }}</p>
            <p>Last Name : {{ $student->last_name }}</p>
            <p>Email : {{ $student->email }}</p>
        @endforeach
    </div>
@endsection
