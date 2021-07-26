@extends('layouts.base')

@section('title','Главная')

@section('main')
    <div class="container">
        <form action="{{route('select.city')}}" method="post">
            @csrf
            <select name="city" id="city">
                @foreach($cities as $city)
                    <option value="{{$city->id}}">{{$city->city}}</option>
                @endforeach
            </select>
            <input type="submit" value="Выбрать">
        </form>
    </div>

    @foreach($news as $news_item)
        <div id="line_block">
            <h3>{{$news_item->title}}</h3>

            <h6>Описание:</h6>
            <i>{{$news_item->description}}</i><br>
            <a href="{{route('show.news', ['news'=>$news_item->id])}}">
                <button class="btn btn-success">Подробнее</button>
            </a>
        </div>
    @endforeach

@endsection
