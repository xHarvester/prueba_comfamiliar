<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alergias;
use App\Models\Acudiente;

class Menor extends Model
{
    use HasFactory;
    protected $table = 'menores';

    public function alergia()
    {
        return $this->belongsTo(Alergias::class, 'alergia_id', 'id');
    }

    public function acudiente()
    {
        return $this->belongsTo(Acudiente::class, 'acudiente_id', 'id');
    }
}
