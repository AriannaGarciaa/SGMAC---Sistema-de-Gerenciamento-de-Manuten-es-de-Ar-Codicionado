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
        Schema::create('chamados', function (Blueprint $table) {
            $table->id();
            $table->string('Local');
            $table->text('DescricaoProblema');
            $table->String('NomeSolicitante');
            $table->enum('status', ['aberto', 'em andamento', 'concluido'])->default('aberto');
            $table->text('solucao')->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chamados');
    }
};
