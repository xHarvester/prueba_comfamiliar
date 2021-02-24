<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Alergias;

class Cuidador extends Model
{
    use HasFactory;
    protected $table = 'cuidadores';

    public function alergia()
    {
        return $this->hasOne(Alergia::class, 'cuidador_id', 'id');
    }
}
