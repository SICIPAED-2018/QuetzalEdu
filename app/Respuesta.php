<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    //
    protected $table = 'respuestas';

    protected $fillable = [
        'respuesta', 'correcta', 'pregunta_id',
    ];

    public function pregunta(){
    	return $this->belongsTo('App\Pregunta');
    }
}
