<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleTrotinets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('trotinets',function (Blueprint $table){
        //     $table->renameColumn('stanje','STANJE');
        // });
        // Schema::table('trotinets', function (Blueprint $table) {
        //     $table->string('boja', 50)->change();
        // });
        // Schema::table('trotinets',function (Blueprint $table){
        //     $table->string('test');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('trotinets',function (Blueprint $table){
        //     $table->dropColumn('test');
        //   $table->renameColumn('STANJE','stanje');
        //   });
    }
}
