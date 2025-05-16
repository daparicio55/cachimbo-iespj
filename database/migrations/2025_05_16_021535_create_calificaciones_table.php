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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->integer('puntos');
            $table->foreignId('participante_id')
            ->constrained('participantes')
            ->onDelete('cascade');
            $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');
            $table->foreignId(('periodo_id'))
            ->constrained('periodos')
            ->onDelete('cascade');
            $table->foreignId('item_id')
            ->constrained('items')
            ->onDelete('cascade');
            $table->unique([
                'participante_id',
                'user_id',
                'periodo_id',
                'item_id'
            ]);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calificaciones');
    }
};
