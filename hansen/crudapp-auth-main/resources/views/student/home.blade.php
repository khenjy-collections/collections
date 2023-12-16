@extends('layouts.app')


@section('content')
    <div class="container">
        <a href="/create" class="btn btn-primary mt-5 mb-5">+ Add Student</a>

        <table class="table">
            <tr>
                <th>No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>

            @foreach ($data as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('student.delete', $student->id) }}" class="btn btn-danger btn-sm">Delete</a>
                        {{-- <a href="{{ route('student.show', $student->id) }}" class="btn btn-dark btn-sm">Show</a> --}}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection
