<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    use HasFactory;

    public function hobbies(){
        return $this->belongsToMany(Hobby::class);
    }

    public function user_roles(){
        return $this->belongsTo(UserRole::class,'role','serial');

    }
}
