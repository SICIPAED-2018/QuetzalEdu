<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContenidoCurso extends Model
{
    //
    protected $table = 'contenidos_curso';

	protected $fillable = ['titulo','area_id','descripcion','informacion','video','user_id'];

	public function area(){
    	return $this->belongsTo('App\Area');
    }

    public function actividades(){

    	return $this->hasMany('App\Actividad');
    }

}
