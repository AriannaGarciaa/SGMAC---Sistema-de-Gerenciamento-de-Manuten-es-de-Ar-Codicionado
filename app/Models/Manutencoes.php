<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencoes extends Model
{
    use HasFactory;

    protected $table = 'manutencoes'; 
    protected $primaryKey = 'IdManutencoes'; 

    protected $fillable = [
        'tecnico_manutencao_idTecnicoManutencao',
        'Problema',
        'Solucao',
        'Status',
        'TipoManutencao',
        'DataAbertura',
        'DataUltimaAtualizacao'
    ];

    public function tecnicoManutencao()
    {
        return $this->belongsTo(TecnicoManutencao::class, 'tecnico_manutencao_idTecnicoManutencao', 'idTecnicoManutencao');
    }
}
