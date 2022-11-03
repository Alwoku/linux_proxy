@extends('layout.pattern')

@section('titel')table @endsection
@section('header1')  @endsection
@section('header2') <a href="{{ route('home') }}">Главная </a> @endsection
@section('content')  
<article class="message is-warning m-">
  <div class="message-body">
  @csrf
            Вы уверены что хотите удалить {{$ip}} ?
   </div>

            <a href="{{ route('delete' , $id ) }}" class="button is-success">Да</a>
            <a href="{{ url()->previous() }}"  class="button is-danger">Отмена</a>

</article>

@endsection