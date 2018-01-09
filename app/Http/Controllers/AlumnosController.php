<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnosController extends Controller
{
    /*public function index()
    {
        return Alumno::all();
    }*/

   /* public function store()
    {
        return Alumno::create(Input::all());
    }*/


    public function show($idAlumno)
    {
        return Alumno::findOrFail($idAlumno);
    }


   /* public function update($alumnoId)
    {
        Alumno::findOrFail($alumnoId)->update(Input::all());
    }


    public function destroy($id)
    {
        Alumno::findOrFail($id)->delete();
    }*/
}
