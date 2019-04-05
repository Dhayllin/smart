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
       'petition_section_id','title','active','type_header_id','type_address_id','type_author_id','type_culprit_id',
       'type_name_action_id','type_num_processo_id',
    ];
}
