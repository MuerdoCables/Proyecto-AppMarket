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
        Schema::create('aplicaciones', function (Blueprint $table) {
            $table->id('app_id');
            $table->unsignedBigInteger('app_usu_id');
            $table->foreign('app_usu_id')->references('usu_id')->on('usuarios')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->string('app_nombre')->unique();
            $table->string('app_icono');
            $table->text('app_descripcion')->nullable();
            $table->string('app_version', 15)->nullable();
            $table->string('app_categoria')->nullable();
            $table->foreign('app_categoria')->references('cat_nombre')->on('categorias')
                ->onDelete('set null')->onUpdate('cascade');
            $table->decimal('app_precio')->nullable();
            $table->string('app_ruta')->nullable();
            $table->string('app_enlace')->nullable();
            $table->boolean('app_obsoleto')->nullable();
            //$table->array('app_fotos')->nullable();
            $table->timestamp('app_created_at')->nullable();
            $table->timestamp('app_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aplicaciones');
    }
};
