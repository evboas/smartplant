<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{
    use HasFactory;
    protected $table = 'anotacoes';
    protected $fillable = ['nome', 'estado','observacoes'];

    public function plantas()
    {
        return $this->belongsTo(Planta::class, 'planta_id');
    }
}
