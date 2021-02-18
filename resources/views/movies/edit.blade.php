@extends('movies.layout')
@section('content')
<div class="row">
@if($errors->any())
<div class="alert alert-danger text-center">Some thing went wrong</div>
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
<form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
<div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputTitle" name="title" value="{{ $movie->title }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputGenre" class="form-label">Genre</label>
    <select class="form-control" id="exampleInputGenre" name="genre">
        <option disabled> Select Option</option>
        @if($geners)
        @foreach($geners as $gener)
            @if($geners == $movie->gener)
                <option value="{{ $gener }}" selected>{{ $gener }}</option>
                @else
                <option value="{{ $gener }}">{{ $gener }}</option>
            @endif
        @endforeach
        @endif
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputRelease" class="form-label">Release Year</label>
    <input type="text" class="form-control" id="exampleInputRelease" name="year" value="{{ $movie->release_year }}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPoster" class="form-label">Poster</label>
    <input type="file" class="form-control" id="exampleInputPoster" name="poster">
  </div>
  <button type="submit" class="btn btn-primary">Update Record</button>
</form>
</div>
@endsection