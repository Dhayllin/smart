<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type_id','section_id'
    ];
}
