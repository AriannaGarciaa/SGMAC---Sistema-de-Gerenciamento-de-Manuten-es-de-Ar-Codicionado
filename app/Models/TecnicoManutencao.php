<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicoManutencao extends Model
{
    use HasFactory;
    protected $table = 'tecnico_manutencao'; 
    
  
    protected $fillable = [
        'nome',
        'empresa',
        'status',
    ];

 
}
