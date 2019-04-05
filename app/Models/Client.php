<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /**s
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password','cpf','rg','orgao_emissor','nacionalidade','estado_civil','profissao',
        'plano','responsavel_id','endereco_id','contact_id','cnpj','razao_social','person_type_id',
        'active','email_verified_at'
    ];

    /**
     *      // ENDEREÇO ESTÁ NOS CONTACTS
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
}
