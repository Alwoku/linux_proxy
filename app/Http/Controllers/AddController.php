<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddRequest;
use App\Http\Requests\UpdateAddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Table;

class AddController extends Controller
{
    private $form = "form" ;
    /**
     * 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Entering data into the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreAddRequest $req){    
       
        $dat = new Table();
        $dat->ip = $req->ip;
        $dat->type = $req->type;
        $dat->time = $req->time;
        $dat->created_at = $req->created_at;
        $dat->port = $req->port;
        $dat->description = $req->description;
        $dat->checked_ma = $req->checked_ma;
        $dat->save();
        return response()->json(["messange"=>"ok"]);
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
     * 
     *
     * @param  \App\Models\Table  $add
     * @return \Illuminate\Http\Response
     */
    public function show($add)
    {
       
    }

    /**
     * Output of data for editing.
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
     * Entering the changed data into the database.
     *
     * @param  \App\Http\Requests\UpdateAddRequest  $request
     * @param  \App\Models\Table  $add
     * @return \Illuminate\Http\Response
     */
    public function update($add, StoreAddRequest $req )
    {
       
        
    
    $dat = Table::find($add);
    $dat->ip = $req->ip;
    $dat->type = $req->type;
    $dat->time = $req->time;
    $dat->created_at = $req->created_at;
    $dat->port = $req->port;
    $dat->description = $req->description;
    $dat->checked_ma = $req->checked_ma;
    $dat->save();
    return response()->json(["messange"=>"ok"]);
    }

    /**
     *
     * @param  \App\Models\Add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(Add $add)
    {
        //
    }
}
