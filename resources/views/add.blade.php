@extends('layout.pattern')

@section('titel')Add @endsection
@section('header1') <a href="{{ route('home')}}">Главная</a> @endsection
@section('content')
<h1 class="title m-3">Добавление записи</h1>
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
                    <input class="input" id="ip" type="text" name="ip" placeholder="Введите ip(формат IPv4)">
                </div>
        </div>
        <div class="field">
            <label class="label" for="type">Type</label>
                <div class="select">
                   <select id="type">
                        <option value="http">http</option>
                        <option value="socks">socks</option>
                   </select>
                </div>
        </div>  
        <div class="field">
            <label class="label" for="time">Time</label>
                <div class="controll">
                    <input class="input" id="time" type="text" name="time" placeholder="Введите time">
                </div>
        </div>  
        <div class="field">
            <label class="label" for="created_at">Created_at</label>
                <div class="controll">
                    <input class="input" id="date" type="datetime-local" value="{{date('Y-m-d H:i:s')}}" name="date">
                </div>
        </div>  
        <div class="field">
            <label class="label" for="port">Port</label>
                <div class="controll">
                    <input class="input" id="port" type="text" name="port" placeholder="Введите port">
                </div>     
        </div>  
        <div class="field">
            <label class="label" for="port">Description</label>
                <div class="controll">
                    <textarea class="textarea is-primary" id="description" cols="1000" type="text" name="description" placeholder="Введите description">
                    </textarea>
                </div>     
        </div>  
        
        <div class="field">
            <label class="label" for="checked_ma">Сhecked manually</label>
                <div class="select">
                   <select id="checked_ma">
                        <option value="yes">Да</option>
                        <option value="no">Нет</option>
                   </select>
                </div>
            <button class="button is-link is-outlined mt-3 is-pulled-right" type="button" id="ad_btn" >Отправить</button>
        </form>
            <a href=" {{ url()->previous() }} " class="button is-warning is-outlined m-3 is-pulled-right">Отмена</a>
</div>


@endsection