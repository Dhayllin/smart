<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PetitionType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'petition_section_id','title','active',
    ];
}
