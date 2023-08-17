<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MuniLogsSistemas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MUNI_logs_sistemas', function (Blueprint $table) {
            $table->increments('log_id');
            $table->string('log_mensaje');

            $table->integer('usu_id')->unsigned();
            $table->foreign('usu_id')->references('usu_id')->on('MUNI_usuarios')->onUpdate('cascade');

            $table->integer('sis_id')->unsigned();
            $table->foreign('sis_id')->references('sis_id')->on('MUNI_sistemas')->onUpdate('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
