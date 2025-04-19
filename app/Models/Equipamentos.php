<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    use HasFactory;

    protected $table = 'equipamentos'; 

    protected $fillable = [
        'BTU',
        'Marca',
        'anoFabricacao',
        'dataInstalacao',
        'status',
        'Local_id'
    ];

    public function local()
    {
        return $this->belongsTo(Local::class, 'Local_id', 'id');
    }

   
}
