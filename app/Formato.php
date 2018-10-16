<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formato extends Model
{
    //
    protected $table = 'formato_evaluacion';

	protected $fillable = ['formato_evaluacion','contenido_curso_id'];
}
