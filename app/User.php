<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email','telefone','whatsapp','saldo','status','nivel_id','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getSaldoAttribute($value)
    {
        return number_format($value, 2, ",", ".");
    }

    public function dados_banco()
    {
        return $this->hasOne('App\DadosBancario');
    }
    public function nivel()
    {
        return $this->belongsTo('App\Nivel','nivel_id');
    }
   

}
