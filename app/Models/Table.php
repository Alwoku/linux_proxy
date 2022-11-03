<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Kyslik\ColumnSortable\Sortable;

class Table extends Model{
    
    use HasFactory,Sortable;
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'proxy_scan_log';

}
