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
        Schema::create('personagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('funcao_id')->unsigned();
            $table->foreign('funcao_id')
                ->references('id')
                ->on('cad_bas_funcao');
            $table->string('token')->nullable(); // Adiciona o campo token
            $table->string('imagem')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personagens');
    }
};
