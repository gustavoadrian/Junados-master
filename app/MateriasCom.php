<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriasCom extends Model
{
    public function instituto()
    {
    	return $this->belongsTo(Instituto::class);
    }

}
