<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    public function studentes(){
          return $this->belongsTo(Student::class,'department','id');
    }

    public function examstudentd(){
        return $this->belongsToMany(Studented::class);
    }
}
