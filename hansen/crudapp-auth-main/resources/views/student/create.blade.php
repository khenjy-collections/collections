@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('student.store') }}" method="post" class="mt-2">
            @csrf
            <h1 class="form-header">Add Student Form</h1>
            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-success">Add</button>
        </form>
    </div>
@endsection
