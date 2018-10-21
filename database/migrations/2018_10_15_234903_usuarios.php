<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table){
            $table->increments('idu');
            $table->string('usuario',40);
            $table->string('password',40);
            $table->string('tipo_usu',40);
            $table->string('nombre',40);
            $table->string('ap_pat',40);
            $table->string('ap_mat',40);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('usuarios');
    }
}
