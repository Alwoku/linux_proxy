<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class DbController extends Controller
{


//  Output of records to the main page.
    public function home(){
      
    $data = Table::orderBy('created_at', 'desc')->Paginate(100);
        return view('db', compact('data'));
    }
// Deleting a record from the database.

    public function delete(Table $id){
       $id->delete();
    return redirect('/')->with('done', 'Запись удалена');
    }

}
