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
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('genero', 1);
            $table->string('cpf', 11);
            $table->date('data_nascimento');
            $table->bigInteger('nis')->nullable();
            $table->char('posicao', 1);
            $table->string('nome_mae');
            $table->integer('telefone')->nullable();
            $table->text('endereco');
            $table->unsignedBigInteger('responsavel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoas');
    }
};
