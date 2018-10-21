<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Prestamos extends Migration
{
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table){
            $table->increments('idp');
            $table->date('fec_prestamo');
            $table->date('fec_entrega');
            $table->integer('monto');
            $table->integer('idl')->unsigned();
            $table->foreign('idl')->references('idl')->on('libros');
            $table->integer('idbe')->unsigned();
            $table->foreign('idbe')->references('idbe')->on('bempleados');
            $table->integer('idu')->unsigned();
            $table->foreign('idu')->references('idu')->on('usuarios');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('prestamos');
    }
}
