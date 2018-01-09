<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Alumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_alumnos', function (Blueprint $table) {
            $table->increments('id_t_usuarios');
            
            $table->string('nombre');
            $table->string('ap_paterno');
            $table->string('ap_materno');            
            $table->int('activo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_alumnos', function (Blueprint $table) {
            //
        });
    }
}
