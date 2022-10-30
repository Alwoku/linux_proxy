<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class DbController extends Controller
{

//  Выбираем записи для главной страницы
    public function home(){
      
    $data = Table::sortable()->Paginate(100);
        return view('db', compact('data'));
    }
//  Принимаем данные и удаляем нужную запись 
    public function delete(Table $id){
       $id->delete();
    return redirect('/')->with('done', 'Запись удалена');
    }
}
