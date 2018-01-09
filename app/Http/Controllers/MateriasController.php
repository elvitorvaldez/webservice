<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
   /* public function index(idMateria)
    {
        return Materia::where('id_t_materia',$idMateria)->get();
    }*/

    public function store()
    {
        return Materia::create(Input::all());
    }


    public function show($id)
    {
        return Materia::findOrFail($id);
    }


    public function update($materiaId)
    {
        Materia::findOrFail($materiaId)->update(Input::all());
    }


    public function destroy($id)
    {
        Materia::findOrFail($id)->delete();
    }
}
