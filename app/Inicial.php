<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicial extends Model
{
    public function comisiones()
    {
    	return $this->hasMany(Comision::class);
    }
}
