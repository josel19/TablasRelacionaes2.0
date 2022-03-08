<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;
    public function aprendices(){
        return $this->hasMany(Aprendiz::class, 'id');
    }
}
