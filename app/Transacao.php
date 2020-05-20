<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $fillable = [
        'remetente_id', 'destinatario_id','origem_id','valor','arquivo','status'
    ];

    public function remetente()
    {
        return $this->belongsTo('App\User', 'remetente_id');
    }

    public function destinatario()
    {
        return $this->belongsTo('App\User', 'destinatario_id');
    }
}
