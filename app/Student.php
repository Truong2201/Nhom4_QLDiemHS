<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student';

    public function class(){
        return $this->belongsTo('App\LClass','class_id','id');
    }

    // public function diems()
    // {
    //     return $this->hasMany('App\Diem','sinhvien_id','id');
    // }
}
