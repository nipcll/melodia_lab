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
        Schema::create('prova', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aula_id');
            $table->foreign('aula_id')->references('id')->on('aula');
            $table->string('titulo', 100);
            $table->longText('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prova');
    }
};
