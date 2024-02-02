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
        Schema::create('observacoes', function (Blueprint $table) {
            $table->id();
            $table->text("observacoes");
            $table->dateTime("horario_observacao");
            $table->foreignId("colaborador_id")->constrained("colaboradores");
            $table->string("usuario");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observacoes');
    }
};
