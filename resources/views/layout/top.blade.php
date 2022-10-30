@extends('layout.pattern')

@section('titel')TOP10 @endsection
@section('header1') <a href="{{ route('home')}}">Главная</a> @endsection
@section('content')
<div class="container is-fullwidth is-normal">
    <div class="title is-3">
        <a href="{{route('fast')}}" class = "link m-5 ">TOP10 самых быстрых</a>
        <a href="{{route('errors')}}"  class = "link m-5 ">TOP10 ошибок</a>
        <a href="{{route('month')}}"  class = "link m-5 ">Таблица месяц общая</a>
    </div>
</div>

@yield('top')


@endsection 







