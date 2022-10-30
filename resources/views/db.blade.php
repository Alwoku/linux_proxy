@extends('layout.pattern')

@section('titel')table @endsection
@section('header1')  @endsection
@section('header2') <a href="{{ route('top') }}">TOP10 </a> @endsection
@section('content')
<div class="block is-fullwidth">
    <div class="block is small">
        {{ $data->links('pagination::bootstrap-4') }}
    </div>
 
       
 
    <a href="{{ route('adds')}}">
        <button class="button is-warning is-focused is-pulled-right m-2">
            Добавить
        </button>
    </a>
    
</div>
<div class="container">
@include('layout.message')    
</div>


<table class="table_gl table is-bordered is-fullwidth " border="1">
            <tr>
                <th class="content is-small">N</th>
                <th>@sortablelink('Ip')</a> </th>
                <th>@sortablelink('Port')</th>
                <th>@sortablelink('Type')</td>
                <th>@sortablelink('Active')</th>
                <th>@sortablelink('Time')</th>
                <th>@sortablelink('Created_at')</th>
                <th>@sortablelink('Updated_at')</th>
                <th>@sortablelink('Error')</th>
                <th>@sortablelink('description')</th>
                <th>@sortablelink('checked_ma')</th>
                <th></th>
            </tr>
        @foreach($data as $value)
        

            <tr>
                <td class="content is-small">{{$loop->index}}</td>
                <td><a href="{{ route('edit', ['id' => $value->id])}}">{{$value->ip}}</a></td>
                <td>{{$value->port}}</td>
                <td>{{$value->type}}</td>
                <td>{{$value->active}}</td>
                <td>{{$value->time}}</td>
                <td>{{$value->created_at}}</td>
                <td>{{$value->updated_at}}</td>
                <td>{{$value->error}}</td>
                <td>{{$value->description}}</td>
                <td>{{$value->checked_ma}}</td>
                <td><a href="{{ route('confir', ['id'=> $value->id , 'ip'=>$value->ip])}}"><button  class="delet button is-danger is-light is-fullwidth" >Удалить</button></a></td>
            </tr>


        
            @endforeach
        </table>
      
        <div class="block is-fullwidth">
</div>

@endsection




