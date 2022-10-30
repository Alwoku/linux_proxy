<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proxy_scan_log', function(Blueprint $table){
          $table->text('description');
          $table->tinyInteger('checked_ma');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proxy_scan_log', function(Blueprint $table){
            $table->dropColumn('description');
            $table->dropColumn('checked_ma');
          });
    }
};