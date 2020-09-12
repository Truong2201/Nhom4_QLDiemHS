<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolyear extends Model
{
    protected $table='schoolyear';

    public function class()
    {
        return $this->belongsTo('App\Schoolyear', 'schoolyear_id', 'id');
    }
}
