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
        Schema::create('personagem_poderes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personagem_id')->unsigned();
            $table->foreign('personagem_id')
                ->references('id')
                ->on('personagens');
            $table->string('nome');
            $table->integer('alcance');
            $table->string('tipo');
            $table->string('alvo');
            $table->text('prejuizo')->nullable();
            $table->text('beneficio')->nullable();
            $table->text('sucesso');
            $table->text('efeito');
            $table->text('fracasso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagem_poderes');
    }
};
