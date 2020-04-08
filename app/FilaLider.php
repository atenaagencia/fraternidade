<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilaLider extends Model
{
    protected $fillable = [
        'user_id',
        'posicao',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
