<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicRelacionamento extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'subtopico','petition_type_id','petition_section_id','demand_id',
    ];
}
