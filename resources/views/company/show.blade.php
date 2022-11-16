@extends('layout')

@section('title', 'Details for ' . $company->name)

@section('jumbotron')
    <h1 class="display-6">Details for {{ $company->name }}</h1>

    <div class="d-flex">

        <div class="me-2">
            <a class="btn btn-primary " href="/company/{{ $company->id }}/edit">Edit</a>
        </div>

        <form class="ml-2" action="/company/{{ $company->id }}" method="POST">
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
                <div class="col-4">{{ $company->name }}</div>
                <div class="col-2"><strong>Email</strong></div>
                <div class="col-4">{{ $company->email }}</div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-2"><strong>Logo</strong></div>
                <div class="col-4">{{ $company->logo }}</div>
                <div class="col-2"><strong>Website</strong></div>
                <div class="col-4">{{ $company->website }}</div>
            </div>
        </div>
    </div>

    <h3 class="h-3">Employees List</h3>

    @foreach ($company->employees as $employee)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <a href="/employee/{{ $employee->id }}">{{ $employee->first_name }}
                            {{ $employee->last_name }}</a>
                    </div>
                    <div class="col-4">{{ $employee->email }}</div>
                    <div class="col-4">{{ $employee->phone }}</div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
