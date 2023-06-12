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
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id('com_id');
            $table->unsignedBigInteger('com_val_id');
            $table->foreign('com_val_id')->references('val_id')->on('valoraciones')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('com_usu_id');
            $table->foreign('com_usu_id')->references('id')->on('users')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->text('com_texto');
            $table->timestamp('com_created_at')->nullable();
            $table->timestamp('com_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comentarios');
    }
};
