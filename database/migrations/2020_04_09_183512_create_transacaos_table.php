<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('remetente_id'); // aqui o campo é criado
            $table->foreign('remetente_id')->references('id')->on('users');
            $table->unsignedBigInteger('destinatario_id');
            $table->foreign('destinatario_id')->references('id')->on('users');
            $table->integer('origem_id');
            $table->float('valor',10,2);
            $table->string('arquivo');
            $table->enum('status', ['aguardando','pendente', 'liberado'])->nullable()->default('aguardando');
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
        Schema::dropIfExists('transacaos');
    }
}
