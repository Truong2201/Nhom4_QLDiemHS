<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LTeacher extends Model
{
    protected $table='teachers';

    public function class()
    {
        return $this->belongsTo('App\LTeacher', 'teachers_id', 'id');
    }
}
