<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Calificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_calificaciones', function (Blueprint $table) {
            $table->increments('id_t_calificaciones');
            
            $table->int('id_t_materias');
            $table->int('id_t_usuario');
            $table->float('calificacion');            
            $table->date('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_calificaciones', function (Blueprint $table) {
            //
        });
    }
}
