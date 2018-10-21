<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Libros extends Migration
{
    public function up()
    {
        Schema::create('libros', function (Blueprint $table){
            $table->increments('idl');
            $table->string('nombre',40);
            $table->string('autor',40);
            $table->string('clasificacion',40);
            $table->integer('existencias');
            $table->integer('codigo');
            $table->string('disponible',1);
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('libros');
    }
}
