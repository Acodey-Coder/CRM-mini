@extends('layout')

@section('title', 'Details for ' . $employee->first_name . ' ' . $employee->last_name)


@section('jumbotron')
    <h1 class="display-6">Details for {{ $employee->first_name }} {{ $employee->last_name }}</h1>

    <div class="d-flex">

        <div class="me-2">
            <a class="btn btn-primary " href="/employee/{{ $employee->id }}/edit">Edit</a>
        </div>

        <form class="ml-2" action="/employee/{{ $employee->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>

@endsection

@section('content')




    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Name</strong></div>
                <div class="col-8">{{ $employee->first_name }} {{ $employee->last_name }}</div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Email</strong></div>
                <div class="col-8">{{ $employee->email }}</div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Phone</strong></div>
                <div class="col-8">{{ $employee->phone }}</div>
            </div>
        </div>
    </div>

    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Company</strong></div>
                <div class="col-8">{{ $employee->company->name }}</div>
            </div>
        </div>
    </div>


@endsection
