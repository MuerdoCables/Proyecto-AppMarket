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
        Schema::create('valoraciones', function (Blueprint $table) {
            $table->id('val_id');
            $table->unsignedBigInteger('val_app_id');
            $table->foreign('val_app_id')->references('app_id')->on('apps')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('val_usu_id');
            $table->foreign('val_usu_id')->references('usu_id')->on('usuarios')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unique(['val_usu_id', 'val_app_id']);
            $table->integer('val_puntuacion');
            $table->text('val_texto')->nullable();
            $table->timestamp('val_created_at')->nullable();
            $table->timestamp('val_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valoraciones');
    }
};
