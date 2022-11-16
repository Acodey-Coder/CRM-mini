@extends('layout')

@section('title', 'Companies')

@section('jumbotron')
<h1 class="display-6">Companies</h1>
<a class="btn btn-primary" href="/company/create">Add New Company</a>    
@endsection


@section('content')

    @foreach ($companies as $company)
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">
                {{-- <div class="col-1">{{ $company->id }}</div> --}}
                <div class="col-4">
                    <a href="/company/{{$company->id}}">{{ $company->name }}</a>
                </div>
                <div class="col-4">{{ $company->email }}</div>
                <div class="col-2">{{ $company->logo }}</div>
                <div class="col-2">{{ $company->website }}</div>
            </div>
        </div>
      </div>
    @endforeach

   


@endsection
