<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    //TABLA AREA_CONOCIMIENTO
    protected $table = 'area_conocimiento';

	protected $fillable = ['area_conocimiento','informacion_general','video_general'];

	public function competencias(){

    	return $this->hasMany('App\Competencia');
    }
}
