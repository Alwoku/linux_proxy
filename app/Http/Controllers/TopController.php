<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Top;

class TopController extends Controller
{

   // Output of the page view template.
   public function Slct(){

      return view('layout.top');
    
                       

   }

   // Data output for the fastest time
   public function top_fast(){
      $tim = Top::where('active', 1)
                                 ->orderBy('time','asc')
                                 ->get();
                  $ti = $tim->toArray();
               $res_t = array_slice($ti, 0,10);
       return view('top_fast', ['res_t' => $res_t]);
   }

   // Output of data on the number of errors
   public function top_err(){
       $err = Top::select('error', Top::raw('COUNT(*)'))
       ->whereNotIn('error', ['NULL'])
       ->orderBy(Top::raw('COUNT(*)'), 'desc')
       ->groupBy('error')
       ->get();
          $err=$err->toArray();
            $res_e = array_slice($err, 0,10);
       return view('top_er', ['res_e' => $res_e]);
   }

   // Output of data on the number of records per month
   public function month(){

       $mon = Top::select(Top::raw('month(`created_at`) AS MONTH,YEAR(created_at) AS YEAR,COUNT(*), AVG(`time`)'))
       ->groupBy('MONTH','YEAR')
       ->orderBy(Top::raw('MONTH,YEAR '),'desc')
       ->get();
         $res_m = $mon->toArray();
       
       $mon_a = Top::select(Top::raw('MONTH(created_at) AS MONTH,YEAR(created_at) AS YEAR,COUNT(*), AVG(`time`), `active`'))
       ->where('active', '=', '1')
       ->orderBy(Top::raw('MONTH,YEAR '),'desc')
       ->groupBy('MONTH','YEAR')
       ->get();
       $res_ma = $mon_a->toArray();

       $mon_n = Top::select(Top::raw('MONTH(created_at) AS MONTH,YEAR(created_at) AS YEAR,COUNT(*), AVG(`time`), `active`'))
       ->where('active', '=', '0')
       ->orderBy(Top::raw('MONTH,YEAR '),'desc')
       ->groupBy('MONTH','YEAR')
       ->get();
       $res_mn = $mon_n->toArray();
       
       return view('month',   ['res_m' => $res_m,
                              'res_ma' => $res_ma,
                              'res_mn' => $res_mn
                    ]);

   }


}
