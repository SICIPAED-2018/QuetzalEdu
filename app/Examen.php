<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    //
    protected $table = 'examenes';

	protected $fillable = ['tipo_examen','nivel_id'];

	public function nivel(){
        return $this->belongsTo('App\Nivel');
    }

    public function preguntas(){
        return $this->hasMany('App\Pregunta');
    }
    
    public static function examenes($id){ 	
    	return Examen::where('nivel_id','=',$id)->get();
    }
}
