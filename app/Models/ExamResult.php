<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    public function studentname(){
        return $this->hasOne(Studented::class, 'id','student_id');
    }

    public function examname(){
        return $this->hasOne(Exam::class, 'id','exam_id');
    }
}
