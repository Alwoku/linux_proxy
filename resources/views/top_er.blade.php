@extends('layout.top')

@section('top')

<div class="container is-normal mt-5">
<h1 class="title is-5">Топ 10 ошибок</h1>
    <table class="table_t table is-bordered is-fullwidth">
        <tr>
            <th>Error</th>
            <th>Count</th>
        </tr>
            @for($i=0;$i< count($res_e);$i++)
                <tr>
                    <td>{{ $res_e[$i]['error']}}</td>
                    <td>{{ $res_e[$i]['COUNT(*)']}}</td>
                
                </tr>   
                
            @endfor

    </table>
</div>

@endsection