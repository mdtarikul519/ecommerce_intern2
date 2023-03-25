<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studented extends Model
{
    use HasFactory;

    public function studentes(){
        return $this->belongsTo(Student::class ,'department','id');
    }   
}
