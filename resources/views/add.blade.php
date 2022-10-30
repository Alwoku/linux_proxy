@extends('layout.pattern')

@section('titel')Add @endsection
@section('header1') <a href="{{ route('home')}}">Главная</a> @endsection
@section('content')
<div class="container">
<form>
        @csrf
            <label class="label" for="ip">Ip</label>
                <div class="controll">
                    <input class="input" id="ip" type="text" name="ip" placeholder="Введите ip(формат IPv4)">
                    <span class="text-danger error-text ip_err"></span>
                </div>
            <label class="label" for="type">Type</label>
                <div class="controll">
                    <input class="input" id="type" type="text" name="type" placeholder="Введите http или socks">
                    <span class="text-danger error-text type_err"></span>
                </div>
            <label class="label" for="time">Time</label>
                <div class="controll">
                    <input class="input" id="time" type="text" name="time" placeholder="Введите time">
                    <span class="text-danger error-text time_err"></span>
                </div>
            <label class="label" for="created_at">Created_at</label>
                <div class="controll">
                    <input class="input" id="date" type="datetime-local" value="{{date('Y-m-d H:i:s')}}" name="date">
                    <span class="text-danger error-text created_err"></span>
                </div>
            <label class="label" for="port">Port</label>
                <div class="controll">
                    <input class="input" id="port" type="text" name="port" placeholder="Введите port">
                    <span class="text-danger error-text port_err"></span>
                </div>     
            <span id="errors"></span>
            <button class="button is-link is-outlined mt-3 is-pulled-right" type="button" id="ad_btn" >Отправить</button>
        </form>
            <a href=" {{route('home')}} "><button class="button is-warning is-outlined m-3 is-pulled-right" >Отмена</button></a>
</div>


@endsection