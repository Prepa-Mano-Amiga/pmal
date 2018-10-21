<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tutores extends Migration
{
    public function up()
    {
        Schema::create('tutores', function (Blueprint $table){
            $table->increments('idt');
            $table->string('nombre',40);
            $table->string('ap_pat',40);
            $table->string('ap_mat',40);
            $table->date('fec_nac');
            $table->string('ocupacion',40);
            $table->string('compañia',40);
            $table->string('curp',40);
            $table->string('grado_estudios',40);
            $table->string('email',40);
            $table->string('calle',40);
            $table->integer('num_int');
            $table->integer('num_ext');
            $table->string('colonia',40);
            $table->string('localidad',40);
            $table->integer('cp');
            $table->integer('idm')->unsigned();
            $table->foreign('idm')->references('idm')->on('municipios');
            $table->integer('ida')->unsigned();
            $table->foreign('ida')->references('ida')->on('alumnos');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('tutores');
    }
}
