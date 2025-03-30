<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManutencoesEquipamentos extends Model
{
    use HasFactory;

    protected $table = 'manutencoes_equipamentos'; // Nome da tabela intermediária
    public $timestamps = false; // Caso a tabela intermediária não possua campos `created_at` e `updated_at`

    protected $fillable = [
        'manutencao_id',    // FK para Manutencoes
        'equipamento_id',   // FK para Equipamentos
    ];

    public function manutencao()
    {
        return $this->belongsTo(
            Manutencao::class, 
            'manutencao_id', 
            'IdManutencoes'
        );
    }

    public function equipamento()
    {
        return $this->belongsTo(
            Equipamento::class, 
            'equipamento_id', 
            'idEquipamentos'
        );
    }
}
