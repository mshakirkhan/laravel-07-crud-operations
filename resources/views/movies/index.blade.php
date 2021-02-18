@extends('movies.layout')
@section('content')
<div class="row">
  @if($message = Session::get('success'))
  <div class="alert alert-success text-center">{{ $message }}</div>
  @endif
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Poster</th>
      <th scope="col">Tite</th>
      <th scope="col">Gener</th>
      <th scope="col">Year</th>
      <th>Manage</th>
    </tr>
  </thead>
  @if($movies)
  <tbody>
    @foreach($movies as $movie)
    <tr>
      <th><img src="{{ asset('users') . '/' .$movie->poster }}" alt="" class="img-thumnail"></th>
      <td>{{ $movie->title }}</td>
      <td>{{ $movie->genre }}</td>
      <td>{{ $movie->release_year }}</td>
      <td>
        <form method="POST" action="{{ route('movies.destroy',  $movie->id) }}">
        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info">Edit</a>
        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Show</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onClick="return confirm('Do you want to delete this record?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
  @endif
</table>
<div class="row">
   <div class="d-flex">
     <div class="mx-auto">
        {!! $movies->links() !!}
     </div>
   </div>
</div>
@endsection