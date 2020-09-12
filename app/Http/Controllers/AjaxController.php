<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Grade;
use App\LClass;

class AjaxController extends Controller
{
    public function getclass($grade_id)
    {
        $grade = LClass::where('grade_id',$grade_id)->get();
            foreach($grade as $grade)
            {
                echo "<option value='".$grade->id."'>".$grade->tenkhoi."</option>";
            }
    }
    
}
