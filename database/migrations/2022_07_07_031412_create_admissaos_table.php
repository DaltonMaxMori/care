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
        Schema::create('admissao', function (Blueprint $table) {
            $table->bigIncrements('idAdmissao');
            $table->date('dataAdmissao');
            $table->integer('grauDependencia');
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at');

            $table->index('idAdmissao');
            // $table->foreign('idPessoa')->references('idPessoa')->on('pessoa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissao');
    }
};
