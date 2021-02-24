<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cuidador;

class Alergias extends Model
{
    use HasFactory;

    protected $table = 'alergias';

    public function cuidador()
    {
        return $this->belongsTo(Cuidador::class, 'cuidador_id', 'id');
    }
}
