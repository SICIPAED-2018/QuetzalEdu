<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'actividad';

	protected $fillable = ['actividad','contenidos_curso_id'];
}
