<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bempleados extends Migration
{
    public function up()
    {
        Schema::create('bempleados', function (Blueprint $table){
            $table->increments('idbe');
            $table->string('nombre',40);
            $table->string('ap_pat',40);
            $table->string('ap_mat',40);
            $table->string('turno',40);
            $table->string('correo',40);
            $table->integer('telefono');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bempleados');
    }
}
