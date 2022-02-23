<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignStudent extends Model
{
    function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }
    function student_class(){
        return $this->belongsTo(StudentClass::class,'student_class_id','id');
    }
    function student_shift(){
        return $this->belongsTo(StudentShift::class,'student_shift_id','id');
    }
    function student_group(){
        return $this->belongsTo(StudentGroup::class,'student_group_id','id');
    }
    function student_year(){
        return $this->belongsTo(StudentYear::class,'student_year_id','id');
    }
    use HasFactory;
}
