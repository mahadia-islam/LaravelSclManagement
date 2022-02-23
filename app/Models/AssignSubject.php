<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    function student_class()
    {
        return $this->belongsTo(StudentClass::class, 'student_class_id', 'id');
    }
    function student_subject()
    {
        return $this->belongsTo(StudentSubject::class, 'student_subject_id', 'id');
    }
    use HasFactory;
}
