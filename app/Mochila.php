<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mochila extends Model
{
    //
    protected $table = 'mochila';

	protected $fillable = ['mochila','contenido_curso_id'];

	public function curso(){

    	return $this->belongsTo('App\Competencia');

    }
}
