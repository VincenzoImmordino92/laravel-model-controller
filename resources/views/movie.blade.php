@extends('layouts.main')


@section('content')

<div class="container d-flex flex-wrap custom m-5">
    <div class="card m-3" style="width: 18rem;">

        <img src="{{$cover->cover_url}}" class="card-img-top" alt="">
        <div class="card-body">
        <h5 class="card-title">{{$movie->title}}</h5>
        <p class="card-text">{{$movie->original_title}}</p>
        <p class="card-text">{{$movie->date}}</p>
        <p class="card-text">{{$movie->nationality}}</p>
        <a href="{{route('home')}}" class="btn btn-primary">Torna in Home</a>
        </div>
    </div>

</div>

@endsection
