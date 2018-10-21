<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table){
            $table->increments('ida');
            $table->string('nombre',40);
            $table->string('ap_pat',40);
            $table->string('ap_mat',40);
            $table->integer('edad');
            $table->string('sexo',1);
            $table->string('curp',40);
            $table->string('email',40);
            $table->string('grado',1);
            $table->string('semestre',1);
            $table->integer('telefono');
            $table->string('calle',40);
            $table->integer('num_int');
            $table->integer('num_ext');
            $table->string('colonia',40);
            $table->string('localidad',40);
            $table->integer('cp');
            $table->string('lugar_nac',40);
            $table->integer('dia');
            $table->string('mes',40);
            $table->integer('año');
            $table->string('ciclo_escolar',40);
            $table->string('act_nac',40);
            $table->string('fich_pago',40);
            $table->string('foto',40);
            $table->string('cert_sec',40);
            $table->integer('ides')->unsigned();
            $table->foreign('ides')->references('ides')->on('escuelas');
            $table->integer('idrm')->unsigned();
            $table->foreign('idrm')->references('idrm')->on('rmedicos');
            $table->integer('idm')->unsigned();
            $table->foreign('idm')->references('idm')->on('municipios');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::drop('alumnos');
    }
}
