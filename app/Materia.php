<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	public $table = "t_materias";
	protected $primaryKey = 'id_t_materias';
    protected $fillable = ['id_t_materias,nombre,activo'];
}
