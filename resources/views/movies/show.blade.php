@extends('movies.layout')
@section('content')
    <div class="row pb-5">
        <div class="col-4"></div>
        <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('users' . "/" . $movie->poster) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <p class="card-text">{{ $movie->genre }} | {{ $movie->release_year }}</p>
              <a href="{{ route('movies.index') }}" class="btn btn-primary">< Go Back</a>
            </div>
          </div>
        </div>
          <div class="col-4"></div>
    </div>
@endsection