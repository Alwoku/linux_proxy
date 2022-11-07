@extends('layout.pattern')

@section('titel')TOP10 @endsection
@section('header1') <a href="{{ route('home')}}">Главная</a> @endsection
@section('content')
<div class="container is-fullwidth is-normal">
    <div class="title is-3">
        <div class="blok">
             <a href="{{route('fast')}}" class = "link m-5 ">TOP10 самых быстрых</a>
        </div>
        <div class="blok">
            <a href="{{route('errors')}}"  class = "link m-5 ">TOP10 ошибок</a>
        </div>
        <div class="blok">  
            <a href="{{route('month')}}"  class = "link m-5 ">Таблица месяц общая</a>
        </div>  
    </div>
</div>

@yield('top')


@endsection 







