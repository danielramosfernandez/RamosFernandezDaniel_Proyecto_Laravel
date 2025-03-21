<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('imagenes', function (Blueprint $table) {
            $table->id(); // Se llamará 'id' en lugar de 'idimagen'
            $table->string('categoria'); // Categoría de la imagen
            $table->string('imagen'); // Ruta o nombre del archivo de imagen
            $table->text('descripcion')->nullable(); // Descripción opcional
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imagenes');
    }
};
