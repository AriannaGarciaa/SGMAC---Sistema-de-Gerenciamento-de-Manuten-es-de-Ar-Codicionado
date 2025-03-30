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
       
        
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('BTU');
            $table->string('Marca');
            $table->string('anoFabricacao');
            $table->string('dataInstalacao');
            $table->string('status');
            $table->foreignId('Local_id')->constrained('local')->onDelete('cascade'); // Chave estrangeira correta
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamentos');
        
    }
};
