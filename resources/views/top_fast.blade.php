@extends('layout.top')

@section('top')

<div class="container is-normal mt-5">
<h1 class="title is-5">Топ 10 самых быстрых</h1>
    <table class="table_t table is-bordered is-fullwidth">
        <tr>
            <th>Ip</th>
            <th>Type</th>
            <th>Time</th>
        </tr>
            @for($i=0;$i< count($res_t);$i++)
                <tr>
                    <td>{{ $res_t[$i]['ip']}}</td>
                    <td>{{ $res_t[$i]['type']}}</td>
                    <td>{{ $res_t[$i]['time']}}</td>
                </tr>   
                
            @endfor
    </table>
</div>
@endsection