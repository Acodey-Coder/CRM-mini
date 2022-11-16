@extends('layout')

@section('title', 'Edit details for ' . $company->name)

@section('jumbotron')
    <h1 class="display-6">Edit details for {{ $company->name }}</h1>
@endsection


@section('content')

    <form class="mb-2" action="/company/{{ $company->id }}" method="POST">
        @method('PATCH')
        @include('company.form')

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
