@extends('layout.top')

@section('top')

<div class="container is-normal mt-5">
   




<h1 class="title is-5">Таблица месяца общая </h1>

    <table class="table_t table is-bordered is-fullwidth">
        <tr>
            <th>Month</th>
            <th>Number of entries</th>
            <th>Аverage time</th>
        </tr>
        
            @for($i=0;$i< count($res_m);$i++)
                <tr>
                    <td>{{ $res_m[$i]['MONTH']}}</td>
                    <td>{{ $res_m[$i]['COUNT(*)']}}</td>
                    <td>{{ $res_m[$i]['AVG(`time`)']}}</td>
                </tr>   
                
            @endfor

    </table> 
<h1 class="title is-5">Таблица месяца активных записей </h1>

    <table class="table_t table is-bordered is-fullwidth">
        <tr>
            <th>Month</th>
            <th>Number of entries</th>
            <th>Аverage time</th>
        </tr>
        
            @for($i=0;$i< count($res_ma);$i++)
                <tr>
                    <td>{{ $res_ma[$i]['MONTH']}}</td>
                    <td>{{ $res_ma[$i]['COUNT(*)']}}</td>
                    <td>{{ $res_ma[$i]['AVG(`time`)']}}</td>
                </tr>   
                
            @endfor

    </table> 
<h1 class="title is-5">Таблица месяца неактивных записей </h1>
    <table class="table_t table is-bordered is-fullwidth">
        <tr>
            <th>Month</th>
            <th>Number of entries</th>
            <th>Аverage time</th>
        </tr>
        
            @for($i=0;$i< count($res_mn);$i++)
                <tr>
                    <td>{{ $res_mn[$i]['MONTH']}}</td>
                    <td>{{ $res_mn[$i]['COUNT(*)']}}</td>
                    <td>{{ $res_mn[$i]['AVG(`time`)']}}</td>
                </tr>   
                
            @endfor

    </table> 



@endsection