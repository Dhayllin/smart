<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetitionDemand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','content','active'
    ];
}
