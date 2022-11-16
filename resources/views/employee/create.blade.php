@extends('layout')

@section('title', 'Add New Employee')


@section('jumbotron')
    <h1 class="display-6">Add New Employee</h1>
@endsection

@section('content')
    <form class="mb-2" action="/employee" method="POST">

        @include('employee.form')

        <button type="submit" class="btn btn-primary">Add Employee</button>
    </form>


@endsection
