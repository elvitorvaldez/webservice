<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Califica;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class CalificacionesController extends Controller
{
    public function index()
    {
        return Califica::all();
    }

    public function store()
    {
        return Calificacion::create(Input::all());
    }


    public function show($calificacionId)
    {
        $fecha = date("Y-m-d");

		$inserted = DB::table('t_calificaciones')
	    ->insert([
		'id_t_materias' => 2,
		'id_t_usuarios' => 1,
		'calificacion' => 100,
		'fecha_registro' => $fecha
	]);

		 
		$exito = Response::json(array("success"=>"ok" , "msg"=>"calificacion registrada"));
	
        return $exito;
    }


    public function update($calificacionId)
    {
        Calificacion::findOrFail($calificacionId)->update(Input::all());
    }


    public function destroy($id)
    {
        Calificacion::findOrFail($id)->delete();
    }
}
