@extends('layout')

@section('title', 'Edit details for ' . $employee->first_name . ' ' . $employee->last_name)


@section('jumbotron')
    <h1 class="display-6">Edit details for {{ $employee->first_name }} {{ $employee->last_name }}</h1>
@endsection

@section('content')

    <form class="mb-2" action="/employee/{{ $employee->id }}" method="POST">
        @method('PATCH')
        @include('employee.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
