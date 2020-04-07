<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    protected $fillable =[
        'posicao', 'user_id','tipo'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
