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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('usu_id');
            $table->string('usu_username')->unique();
            $table->string('usu_email')->unique();
            $table->timestamp('usu_email_verified_at')->nullable();
            $table->string('usu_password');
            $table->string('usu_nombre')->nullable();
            $table->string('usu_apellidos')->nullable();
            $table->text('usu_descripcion')->nullable();
            $table->string('usu_foto')->nullable();
            $table->date('usu_fenacimiento')->nullable();
            $table->integer('usu_telefono')->nullable();
            $table->string('usu_pais')->nullable();
            $table->unsignedBigInteger('usu_rol_id');
            $table->foreign('usu_rol_id')->references('rol_id')->on('roles')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('usu_ban')->nullable();
            $table->string('usu_remember_token', 100)->nullable();
            $table->timestamp('usu_created_at')->nullable();
            $table->timestamp('usu_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
