@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="row py-2 d-flex justify-content-between">
        <h4>Students</h4>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Add Student</a>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @forelse($students as $student)
            <tr>
                <th scope="row">{{ ++$loop->index }}</th>
                <td>{{ $student->nume }}</td>
                <td>{{ $student->prenume }}</td>
                <td>@mdo</td>
            </tr>
            @empty
                <p>No students</p>
            @endforelse

            </tbody>
        </table>
    </div>
@endsection
