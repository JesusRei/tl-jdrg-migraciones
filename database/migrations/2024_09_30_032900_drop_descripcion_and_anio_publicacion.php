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
        Schema::table('jesusrbooks20242', function (Blueprint $table) {
            $table->dropColumn(['descripcion', 'anio_publicacion']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jesusrbooks20242', function (Blueprint $table) {
            $table->text('descripcion')->nullable();
            $table->integer('anio_publicacion')->unsigned();
        });
    }
};
