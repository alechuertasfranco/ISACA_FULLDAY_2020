<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $primaryKey='id_participante';
    public $timestamps = false;
    protected $fillable = ['apellidos', 'nombres', 'email', 'telefono',
    'tipo', 'organizacion', 'aprobacion', 'pago', 'metodo', 'monto'];
    protected $table = 'participantes';
}
