@extends('movies.layout')
@section('content')
<div class="row">
<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
<div class="mb-3">
    <label for="exampleInputTitle" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputTitle" name="title">
  </div>
  <div class="mb-3">
    <label for="exampleInputGenre" class="form-label">Genre</label>
    <select class="form-control" id="exampleInputGenre" name="genre">
        <option selected disabled> Select Option</option>
        @if($geners)
        @foreach($geners as $gener)
        <option value="{{ $gener }}">{{ $gener }}</option>
        @endforeach
        @endif
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputRelease" class="form-label">Release Year</label>
    <input type="text" class="form-control" id="exampleInputRelease" name="year">
  </div>
  <div class="mb-3">
    <label for="exampleInputPoster" class="form-label">Poster</label>
    <input type="file" class="form-control" id="exampleInputPoster" name="poster">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection