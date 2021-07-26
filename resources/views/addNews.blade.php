@extends('layouts.base')

@section('title','Добавить новость')

@section('main')
    <div class="row">
        <div class="col-8 add-book">
            <form action="{{route('store.news')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input name="news[title]" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <input name="news[description]" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Категория</label>
                    <select name="news[category_id]" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Город</label>
                    <select name="news[city_id]" id="category">
                        <option value="">Не выбрано</option>
                        @foreach($cities as $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Изображение</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>
    </div>
@endsection
