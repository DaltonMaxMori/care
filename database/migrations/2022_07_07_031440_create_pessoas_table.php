<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->bigIncrements('idPessoa');
            $table->string('nomeCompleto')->unique();
            $table->integer('cpf')->unique();
            $table->string('sexo');
            $table->date('dataDeNascimento');
            $table->string('endereco');
            $table->string('cidade');
            $table->string('bairro');
            $table->integer('cep');
            
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

            $table->index('idPessoa');
            // $table->foreign('idAdmissao')->references('idAdmissao')->on('Admissao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa');
    }
};
