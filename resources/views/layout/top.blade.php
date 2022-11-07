@extends('layout.pattern')

@section('titel')TOP10 @endsection
@section('header1') <a href="{{ route('home')}}">Главная</a> @endsection
@section('content')
<div class="card-footer">
        <div class="blok">
             <a href="{{route('fast')}}" class = "card-footer-item">TOP10 самых быстрых</a>
        </div>
        <div class="blok">
            <a href="{{route('errors')}}"  class = "card-footer-item ">TOP10 ошибок</a>
        </div>
        <div class="blok">  
            <a href="{{route('month')}}"  class = "card-footer-item">Таблица месяц общая</a>
        </div>  
</div>

@yield('top')


@endsection 







