@extends('layouts.base')

@section('title',$news->title)

@section('main')
    <div class="container">
        <div class="row">
            <div class="col">
                <h4>{{$news->title}}</h4>
                <img src="{{Storage::url($news->image)}}" alt="">
            </div>
            <div class="col">
                <p>{{$news->description}}</p>


                <form action="{{route('favorites.user')}}" method="post">
                    @csrf
                    <input type="hidden" name="news_id" value="{{$news->id}}">
                    <input type="submit" class="btn btn-outline-warning" value="Добавить в избранное">
                </form>

            </div>
        </div>
        <h4>Похожие новости</h4>
        <div class="row">
            @foreach($related_news as $news_item)
                <div class="col">
                    <h6>{{$news_item->title}}</h6>
                    <a href="{{route('show.news',['news'=>$news_item->id])}}">Подробнее</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
