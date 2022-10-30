@extends('layout.pattern')

@section('titel') Edit @endsection
@section('header1') <a href="{{route('home')}}">Главная</a> @endsection

@section('content')

<div class="container mt-5">
    <h1 class="title m-3">Редактирование записи</h1>
    <form>
        @csrf
        <label class="lable">Ip</label>
            <div class="control">
                <input type="text" name="ip" class="input" id="ip" value="{{$rc->ip}}">
            </div>
        <label class="lable">Type</label>
            <div class="control">
                <input type="text" name="type" class="input" id="type" value="{{$rc->type}}">
            </div>
        <label class="lable">Time</label>
            <div class="control">
                <input type="text" name="time" class="input" id="time" value="{{$rc->time}}">
        </div<label class="lable">Created_at</label>
            <div class="control">
                <input type="datetime-local" name="created_at" class="input" id="date" value="{{$rc->created_at}}">
            </div>
        <label class="lable">Port</label>
            <div class="control">
                <input type="text" name="port" class="input" id="port" value="{{$rc->port}}">
            </div>
            
            <button class="button is-link is-outlined m-3 is-pulled-right" type="button" id="ad_up" >Отправить</button>
        <span id="errors"></span>
    </form>
    <a href="{{ route('confir', ['id'=> $rc->id , 'ip'=>$rc->ip])}}"  class="delet button is-danger is-link is-outlined m-3 is-pulled-right" >Удалить</a>
            <a href=" {{route('home')}} " class="button is-warning is-outlined m-3 is-pulled-right" >Отмена</a>
</div>


@endsection

<?php
// print_r($rc);
?>