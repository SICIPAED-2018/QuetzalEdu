<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'actividad';

	protected $fillable = ['actividad','contenido_curso_id'];

	public function contenido(){

    	return $this->belongsTo('App\ContenidoCurso');

    }
}
