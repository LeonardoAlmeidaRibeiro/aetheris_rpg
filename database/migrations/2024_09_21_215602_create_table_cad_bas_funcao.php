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
        Schema::create('cad_bas_funcao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('vida');
            $table->integer('ataque');
            $table->integer('alcance')->nullable();
            $table->string('tipo')->nullable();
            $table->integer('defesa');
            $table->integer('movimento');
            $table->string('descricao')->nullable();
            $table->string('passiva')->nullable();
            $table->string('gatilho')->nullable();
            $table->string('resposta')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cad_bas_funcao');
    }
};
