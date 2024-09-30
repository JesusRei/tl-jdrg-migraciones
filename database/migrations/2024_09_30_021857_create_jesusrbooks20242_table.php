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
        Schema::create('jesusrbooks20242', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255)->nullable(); 
            $table->string('autor', 100);
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 8, 2)->default(0);
            $table->unsignedInteger('paginas');
            $table->integer('anio_publicacion')->unsigned();
            $table->boolean('disponible_en_casa')->default(true);
            $table->date('fecha_agregado');
            $table->string('editorial', 100)->unique();
            $table->string('isbn', 13)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jesusrbooks20242');
    }
};
