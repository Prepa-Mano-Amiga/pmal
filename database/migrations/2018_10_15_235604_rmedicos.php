<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rmedicos extends Migration
{
    public function up()
    {
        Schema::create('rmedicos', function (Blueprint $table){
            $table->increments('idrm');
            $table->string('responsable',40);
            $table->integer('num_hermanos');
            $table->string('nom_hermanos',40);
            $table->integer('edad');
            $table->string('tipo_sangre',40);
            $table->string('contacto1',40);
            $table->integer('tel1');
            $table->string('contacto2',40);
            $table->integer('tel2');
            $table->string('contacto3',40);
            $table->integer('tel3');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('rmedicos');
    }
}
