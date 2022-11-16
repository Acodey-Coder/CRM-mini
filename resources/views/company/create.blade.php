@extends('layout')

@section('title', 'Add New Company')


@section('jumbotron')
<h1 class="display-6">Add New Company</h1>
@endsection

@section('content')

    <form class="mb-2" action="/company" method="POST">
       
        @include('company.form')

        <button type="submit" class="btn btn-primary">Add Company</button>
    </form>


@endsection
