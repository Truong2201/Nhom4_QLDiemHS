<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LClass extends Model
{
    protected $table='class';
    
    public function grade()
    {
        return $this->belongsTo('App\Grade','grade_id','id');        
    }

    public function student()
    {
        return $this->hasMany('App\Student','class_id','id');
    }

    public function Subject()
    {
        return $this->belongsToMany('App\Subject','subject_class','class_id','subject_id');
    }
    public function Teacher()
    {
        return $this->belongsTo('App\LTeacher','teachers_id','id');
    }
}
