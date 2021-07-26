@extends('layouts.base')

@section('title','Избранное')

@section('main')
    <div class="container">
        @foreach($user->news as $news)
        <div class="row">
            <a href="{{route('show.news',['news' => $news->id])}}"><h6>{{$news->title}}</h6></a>
        </div>
        @endforeach
    </div>
@endsection
