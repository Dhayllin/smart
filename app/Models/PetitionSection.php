<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetitionSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','description','active','preliminar','do_cabimento','da_sintese_fatica','do_direito','dos_pedidos','dos_fatos'
    ];
}
