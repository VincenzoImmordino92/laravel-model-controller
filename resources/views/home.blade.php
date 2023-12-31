@extends('layouts.main')


@section('content')

<div class="container d-flex flex-wrap custom">
    @foreach ($movies as $movie)
    <div class="card m-3" style="width: 18rem;">
        @foreach ($covers as $cover)
        @if ($cover->movie_id === $movie->id)
        <img src="{{$cover->cover_url}}" class="card-img-top" alt="">
        @endif

        @endforeach
        <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <p class="card-text">{{$movie->original_title}}</p>
        <p class="card-text">{{$movie->date}}</p>
        <p class="card-text">{{$movie->nationality}}</p>
        <a href="{{route('movie', ['id' => $movie->id])}}" class="btn btn-primary">Vai</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
