<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') :: Новости</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="container">
    @if(Auth::check())
        <nav class="navbar navbar-light bg-light">
            <a href="{{route('index.news')}}"
               class="navbar-brand mr-auto">Главная</a>
            <a href="{{route('home')}}"
               class="nav-item nav-link">Профиль</a>
            <a href="{{route('create.news')}}"
               class="nav-item nav-link">Добавить новость</a>
            <a href="{{route('indexFavorites.user')}}"
               class="nav-item nav-link">Избранные новости</a>
            <a href="{{route('search.news')}}"
               class="nav-item nav-link">Поиск</a>

            <form action="{{route('logout')}}" method="post"
                  class="form-inline">
                <input type="submit" class="btn btn-danger"
                       value="Выход">
                @csrf
            </form>
        </nav>
    @else
        <nav class="navbar navbar-light bg-light">
            <a href="{{route('index.news')}}"
               class="navbar-brand mr-auto">Главная</a>
            <a href="{{route('register')}}"
               class="nav-item nav-link">Регистрация</a>
            <a href="{{route('login')}}"
               class="nav-item nav-link">Вход</a>
        </nav>
    @endif

    <h1 class="my-3 text-center title">Новости</h1>


    @yield('main')

</div>
</body>

</html>
