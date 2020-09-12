<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{  
    protected $table='grade';

    public function classes()
    {
        return $this->hasMany('App\LClass','grade_id','id');
    }
}
