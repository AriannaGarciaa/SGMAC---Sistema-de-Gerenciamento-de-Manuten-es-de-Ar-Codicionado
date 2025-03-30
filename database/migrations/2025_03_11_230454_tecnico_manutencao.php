<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tecnicos_manutencao', function (Blueprint $table) {
            $table->id();
            $table->string('nome'); // Nome do técnico
            $table->string('Empresa')->unique(); // Nome Empresa
            $table->string('Status')->nullable(); // Telefone opcional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnicos_manutencao');
    }
};
