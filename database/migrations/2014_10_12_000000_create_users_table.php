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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nombre')->nullable();
            $table->string('apellidos')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('foto')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('pais')->nullable();
            $table->unsignedBigInteger('rol');
            $table->foreign('rol')->references('rol_id')->on('roles')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->boolean('ban')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
