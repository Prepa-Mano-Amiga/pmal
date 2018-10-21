<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Municipios extends Migration
{
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table){
            $table->increments('idm');
            $table->string('nombre',40);
            $table->integer('ide')->unsigned();
            $table->foreign('ide')->references('ide')->on('estados');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('municipios');
    }
}
