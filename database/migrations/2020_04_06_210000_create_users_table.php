<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('usuario');
            $table->string('email');
            $table->string('telefone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('picpay')->nullable();
            $table->float('saldo', 10,2)->nullable()->default(0.00);
            $table->unsignedBigInteger('nivel_id');
            $table->foreign('nivel_id')->references('id')->on('nivels');
            $table->integer('cont_deposito')->nullable()->default(0);
            $table->enum('status', ['pendente','inativo', 'ativo'])->nullable()->default('ativo');
            $table->string('termo')->nullable()->default('aceito');
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
}
