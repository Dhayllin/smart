<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'title','content','petition_section_id','petition_type_id','petition_demand_id',
       'topic_id', 'client_id','address_id','culprit_id'
    ];
}
