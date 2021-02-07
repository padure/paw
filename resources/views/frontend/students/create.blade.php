@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <div class="row py-2 d-flex justify-content-between">
        <h4>Students</h4>
        <a href="{{ route('students.create') }}" class="btn btn-success btn-sm">Add Student</a>
    </div>
    <div class="row">
        <form method="post" action="{{ route('students.store') }}" class="col-md-4 m-auto">
            @csrf
            <div class="mb-3">
                <label for="exampleInputNume" class="form-label">Nume</label>
                <input type="text" class="form-control" name="nume" id="exampleInputNume" aria-describedby="numeHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPrenume" class="form-label">Prenume</label>
                <input type="text" class="form-control" name="prenume" id="exampleInputPrenume">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
