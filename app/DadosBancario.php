<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosBancario extends Model
{
    protected $fillable =['user_id','cpf','nome_completo','banco','agencia','conta','operacao','tipo_conta'];
}
