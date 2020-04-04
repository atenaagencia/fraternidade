<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosBancariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_bancarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('cpf', 11);
            $table->string('nome_completo');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->string('operacao')->nullable();
            $table->enum('tipo_conta', ['corrente', 'poupanca']);           
                       
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
        Schema::dropIfExists('dados_bancarios');
    }
}
