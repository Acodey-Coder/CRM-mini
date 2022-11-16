@extends('layout')

@section('title', 'Employees')

@section('jumbotron')
    <h1 class="display-6">Employee</h1>
    <a class="btn btn-primary" href="/employee/create">Add New Employee</a>
@endsection


@section('content')


    @foreach ($employees as $employee)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    {{-- <div class="col-1">{{ $employee->id }}</div> --}}
                    <div class="col-3">
                        <a href="/employee/{{ $employee->id }}">{{ $employee->first_name }}
                            {{ $employee->last_name }}</a>
                    </div>
                    <div class="col-3">{{ $employee->email }}</div>
                    <div class="col-2">{{ $employee->phone }}</div>
                    <div class="col-2">{{ $employee->company->name }}</div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
