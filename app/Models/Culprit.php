<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Culprit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','contact_id','nacionalidade','profissao','rg','orgao_emissor','cpf',
        'estado_civil','cnpj','razao_social','person_type_id','active'
    ];
}
