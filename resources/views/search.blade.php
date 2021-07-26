@extends('layouts.base')

@section('title','Поиск')

@section('main')
    <div class="container">
        <form>
            <div class="form-group">
                <input type="text" name="title" placeholder="Поиск...">
            </div>
            <input type="submit" value="Поиск">
        </form>
        <br>
        @if($news == null or !count($news))
            <h4>Поиск не дал результатов...</h4>
        @else
            @foreach($news as $news_item)
                <div class="row">
                    <h6><a href="{{route('show.news', ['news' => $news_item->id])}}">{{$news_item->title}}</a></h6>
                </div>
                <hr>
            @endforeach
        @endif
    </div>
@endsection
