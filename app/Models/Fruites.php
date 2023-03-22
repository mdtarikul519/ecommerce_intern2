<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fruites extends Model
{
    use HasFactory;

    public function shopes(){
        return $this->belongsToMany(Shop::class);
    }
   
}
