<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Califica;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;


class CalificacionesController extends Controller
{
    public function index(Request $request)
    {

  
	$idAlumno = $request->idAlumno;
       
    	$users = DB::table("t_alumnos")
            ->join("t_calificaciones", "t_alumnos.id_t_usuarios", "=", "t_calificaciones.id_t_usuarios")
            ->join("t_materias", "t_materias.id_t_materias", "=", "t_calificaciones.id_t_materias")
            ->select("t_alumnos.id_t_usuarios", "t_alumnos.nombre", "t_alumnos.ap_paterno", "t_alumnos.ap_materno","t_materias.nombre", "t_calificaciones.calificacion")  
            ->selectRaw("DATE_FORMAT(t_calificaciones.fecha_registro,'%d-%m-%Y') as fecha_registro")
            ->where('t_alumnos.id_t_usuarios', '=', $idAlumno)
            ->get();

        $promedio = DB::table("t_alumnos")
            ->join("t_calificaciones", "t_alumnos.id_t_usuarios", "=", "t_calificaciones.id_t_usuarios")
            ->join("t_materias", "t_materias.id_t_materias", "=", "t_calificaciones.id_t_materias")
             ->select(DB::raw('AVG(t_calificaciones.calificacion) as promedio'))
             ->where('t_alumnos.id_t_usuarios', '=', $idAlumno)
            ->get();    

        

     $exito = array_merge(json_decode($users, true),json_decode($promedio, true));
     return  $exito;

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
