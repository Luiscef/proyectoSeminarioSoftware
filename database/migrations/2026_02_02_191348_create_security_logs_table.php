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
        Schema::create('registros_seguridad', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('tipo_evento', 50);
            $table->foreignId('usuario_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('email')->nullable();
            $table->string('direccion_ip', 45);
            $table->text('detalles')->nullable();
            $table->enum('nivel_riesgo', ['bajo', 'medio', 'alto', 'critico'])->default('bajo');
            $table->timestamp('fecha_registro')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros_seguridad');
    }
};