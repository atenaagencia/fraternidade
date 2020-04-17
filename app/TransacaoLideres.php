<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransacaoLideres extends Model
{
    protected $fillable = [
        'remetente_id', 'destinatario_id','origem_id','valor','arquivo','status'
    ];
}
