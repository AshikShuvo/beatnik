@extends('layouts.app')
@section('content')
<div class="card mb-3">
    <img class="card-img-top" src="http://127.0.0.1:8000/storage/news/{{$news->image}}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{$news->title}}</h5>
      <p class="card-text">{!!$news->body!!}</p>
      <a href="{{route('news.index')}}" class="btn btn-primary">Back to News</a>
    </div>
  </div>
@endsection
