<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'conductor',
        'documentoconductor',
        'modelo',
        'anno',
        'matricula',
        'placa',
        'tecnomecanica',
        'soat',
        'targetapropiedad',
        'fechavencimiento',
    ];
}
