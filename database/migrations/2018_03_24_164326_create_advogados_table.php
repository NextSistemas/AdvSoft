<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvogadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');            
            $table->string('nome');
            $table->string('oab');
            $table->string('celular');
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('cep');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('numero')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade');
            $table->string('uf');
            $table->text('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advogados');
    }
}
