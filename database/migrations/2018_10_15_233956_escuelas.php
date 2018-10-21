<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Escuelas extends Migration
{
    public function up()
    {
        Schema::create('escuelas', function (Blueprint $table){
            $table->increments('ides');
            $table->string('nombre',40);
            $table->string('localidad',40);
            $table->string('sostenimiento',40);
            $table->integer('fec_engre');
            $table->double('promedio');
            $table->string('clave_sector',40);
            $table->integer('idm')->unsigned();
            $table->foreign('idm')->references('idm')->on('municipios');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('escuelas');
    }
}
