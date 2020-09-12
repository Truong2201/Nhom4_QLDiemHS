<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diem extends Model
{
    protected $table='semester1';
    public function sinhviens()
    {
        return $this->belongsTo('App\Student','student_id','id');
    }
    public function subject()
    {
        return $this->belongsTo('App\Subjet','subject_id','id');
    }
}