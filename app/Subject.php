<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subject';

    public function teacher()
    {
        return $this->hasMany('App\Teacher', 'sub_id', 'id');
    }
}
