@extends('layout.pattern')

@section('titel') Edit @endsection
@section('header1') <a href="{{route('home')}}">Главная</a> @endsection

@section('content')

<div class="container mt-5">
    <h1 class="title m-3">Редактирование записи</h1>
    <div class="container mt-5">
            <div class="message is-danger m-5 is-fullwidth">
                <ul id="errors">           
                </ul>
            </div>
    <form>
        @csrf

        <div class="field">
            <label class="label" for="ip">Ip</label>
                <div class="controll">
                    <input class="input" id="ip" type="text" name="ip" value="{{$rc->ip}}">
                </div>
        </div>
        <div class="field">
            <label class="label" for="type">Type</label>
                <div class="select">
                   <select id="type" >
                        <option value="{{$rc->type}}"selected>{{$rc->type}}</option>
                        @if($rc->type == "socks")
                        <option value="http">http</option>
                        @else
                        <option value="socks">socks</option>
                        @endif
                   </select>
                </div>
        </div>  
        <div class="field">
            <label class="label" for="time">Time</label>
                <div class="controll">
                    <input class="input" id="time" type="text" name="time" value="{{$rc->time}}">
                </div>
        </div>  
        <div class="field">
            <label class="label" for="created_at">Created_at</label>
                <div class="controll">
                    <input class="input" id="date" type="datetime-local" value="{{$rc->created_at}}" name="date">
                </div>
        </div>  
        <div class="field">
            <label class="label" for="port">Port</label>
                <div class="controll">
                    <input class="input" id="port" type="text" name="port" value="{{$rc->port}}">
                </div>  
                <div class="field">
            <label class="label" for="port">Description</label>
                <div class="controll">
                    <textarea class="textarea is-primary" cols="1000" id="description" type="text" name="description"> {{$rc->description}}</textarea>
                </div>     
        </div>  
        
        <div class="field">
            <label class="label" for="checked_ma">Сhecked manually</label>
                <div class="select">
                   <select id="checked_ma">
                    
                        @if($rc->checked_ma == "null")
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                        @endif
                        @if($rc->checked_ma == "1")
                        <option value="{{$rc->checked_ma}}"selected>Да</option>
                        <option value="0">Нет</option>
                        @else
                        <option value="{{$rc->checked_ma}}"selected>Нет</option>
                        <option value="1">Да</option>
                        @endif

                   </select>
                </div>   
        </div>  
            <button class="button is-link is-outlined mt-3 is-pulled-right" type="button" id="ad_up" >Отправить</button>
        </form>
            <a href="{{ url()->previous() }}" class="button is-warning is-outlined m-3 is-pulled-right">Отмена</a>
</div>






    



@endsection
