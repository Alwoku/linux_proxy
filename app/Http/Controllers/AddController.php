<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddRequest;
use App\Http\Requests\UpdateAddRequest;
use Illuminate\Http\Request;
use App\Models\Table;

class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {       
    //    Это НЕ РАБОТАЕТ C Ajax-сом! И не понимает, что ему говорит Ajax
    //    $data = $req->validate([
    //     'ip' => 'bail|required|ipv4',
    //     'type' =>'required|exists:proxy_scan_log,type',
    //     'time' => 'required|numeric|gte:0',
    //     'created_at'=> 'date_format:Y-m-d H:i:s',
    //     'port'=> 'required|numeric|digits_between:1,65535'
    //    ]);

    //    $res = $data->toJson();
    //    return $res;
    //     Поэтому запрос обрабатывается вручную:

    $ip=$req->input('ip');
       if( isset($ip)) {
        if(filter_var($ip, FILTER_VALIDATE_IP) ) {

        $ip = explode('.', $ip);
            if(count($ip) > 4){
                return "Параметры неверны";
            }
            for($i=0;$i<count($ip); $i++){
                if(is_int($ip[$i])){
                    return "Опечатка";
                }
                if($ip[$i]<0 && $ip[$i] > 255){
                    return "Параметры неверны";
                }
            }
        }else{
            return "Неверный формат ip";
        }
       }else {
        return "Введите ip";
       }
       $type = $req->input('tp');
       if(!isset($type)){
        return "Введите type";
       }else if($type == 'http' || $type == 'socks') {
       }else{
        return "Неверный формат type";
       }
       $time = $req->input('tim');
       if (!isset($time)) {
        return "Введите time";
       }else if ($time < 0 ) {
        return "Неверный формат time";
       }
        $cr = $req->input('date');
       if (!isset($cr)) {
        return "Введите created_at";
       }else if(preg_match("/^[12][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[01]) ([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/",$cr)){
        return "Неверный формат created_at";
       }
       $port=$req->input('port');
       if (!isset($port)) {
        return "Введите port";
       }else if($port < 1 || $port > 65535){
        return "Неверный формат port";
       }
       
       //Не понимаю почему не вставляется измененная дата
       $dat = new Table();
       $dat->ip = $req->ip;
       $dat->type = $req->tp;
       $dat->time = $req->tim;
       $dat->created_at = $req->date;
       $dat->port = $req->port;
       $dat->save();
       return "ok";
    //    return redirect('/')->with("done", "Добавлена запись в таблицу ip ");
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Table  $add
     * @return \Illuminate\Http\Response
     */
    public function show($add)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Table $add
     * @return \Illuminate\Http\Response
     */
    public function edit($add)
    {
        $rc = new Table();
       return view('edit', ['rc'=>$rc->find($add)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddRequest  $request
     * @param  \App\Models\Table  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $add)
    {
        
    //   История повторяется:
    //    $data = $req->validate([
    //     'ip' => 'bail|required|ipv4',
    //     'type' =>'required|exists:proxy_scan_log,type',
    //     'time' => 'required|numeric|gte:0',
    //     'created_at'=> 'date_format:Y-m-d H:i:s',
    //     'port'=> 'required|numeric|digits_between:1,65535'
    //    ]);

    //    $res = $data->toJson();
    //    return $res;

    $ip=$req->input('ip');
    if( isset($ip)) {
     if(filter_var($ip, FILTER_VALIDATE_IP) ) {

     $ip = explode('.', $ip);
         if(count($ip) > 4){
             return "Параметры неверны";
         }
         for($i=0;$i<count($ip); $i++){
             if(is_int($ip[$i])){
                 return "Опечатка";
             }
             if($ip[$i]<0 && $ip[$i] > 255){
                 return "Параметры неверны";
             }
         }
     }else{
         return "Неверный формат ip";
     }
    }else {
     return "Введите ip";
    }
    $type = $req->input('tp');
    if(!isset($type)){
     return "Введите type";
    }else if($type == 'http' || $type == 'socks') {
    }else{
     return "Неверный формат type";
    }
    $time = $req->input('tim');
    if (!isset($time)) {
     return "Введите time";
    }else if ($time < 0 ) {
     return "Неверный формат time";
    }
     $cr = $req->input('date');
    if (!isset($cr)) {
     return "Введите created_at";
    }else if(preg_match("/^[12][0-9]{3}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[01]) ([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/",$cr)){
     return "Неверный формат created_at";
    }
    $port=$req->input('port');
    if (!isset($port)) {
     return "Введите port";
    }else if($port < 1 || $port > 65535){
     return "Неверный формат port";
    }
    
    //Не понимаю почему не вставляется измененная дата
    $dat = Table::find($add);
    $dat->ip = $req->ip;
    $dat->type = $req->tp;
    $dat->time = $req->tim;
    $dat->created_at = $req->date;
    $dat->port = $req->port;
    $dat->save();
    return "ok";
 //    return redirect('/')->with("done", "Добавлена запись в таблицу ip ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        //
    }
}
