<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrudBook extends Model
{
    use HasFactory;

    public function crud_author(){
        return $this->belongsToMany(CrudAuthor::class);
    }


    public function crud_publiser(){
        return $this->belongsToMany(CrudPublication::class);
    }
}
