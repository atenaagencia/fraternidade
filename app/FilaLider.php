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
}
