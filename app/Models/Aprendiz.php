<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;
    public function fichas(){
        return $this->belongsTo(Ficha::class,'id_ficha');
    }
}
