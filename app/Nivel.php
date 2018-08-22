<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    //
    protected $table = 'niveles';

	protected $fillable = ['nivel_educativo'];

	public function examenes(){
    	return $this->hasMany('App\Examen');
    }
}
