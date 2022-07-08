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
        Schema::create('ocorrencia', function (Blueprint $table) {
            $table->bigIncrements('idOcorrencia');
            $table->string('tipo');
            $table->string('descricao');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

            $table->index('idOcorrencia');
            // $table->foreign('idAdmissao')->references('idAdmissao')->on('admissao');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocorrencia');
    }
};
