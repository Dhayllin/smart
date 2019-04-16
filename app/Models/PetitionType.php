<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class PetitionType extends Model
{
    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'petition_section_id','title','active','header_address','header_num_process','header_author',
       'header_culprit','header_name_action'
    ];

    public static function headerAddress($header_address = null){

        $header_addresses=[
            'IV' => 'Identificar a vara',
            'NV' => 'Não identificar a vara',      
        ];
        
        if(!$header_address)
            return $header_addresses;

        return $header_addresses[$header_address];       
    }
    
    public static function headerNumProcess($header_num_process = null){

        $header_num_processes=[
            'S' => 'Sim',
            'N' => 'Não',      
        ];
        
        if(!$header_num_process)
            return $header_num_processes;

        return $header_num_processes[$header_num_process];       
    }

    public static function headerAuthor($header_author = null){

        $header_authors=[
            'QC' => 'Qualificação completa',
            'JQ' => 'Já qualificado',      
        ];
        
        if(!$header_author)
            return $header_authors;

        return $header_authors[$header_author];       
    }
    public static function headerCulprit($header_culprit = null){

        $header_culprits=[
            'QC' => 'Qualificação completa',
            'JQ' => 'Já qualificado',      
        ];
        
        if(!$header_culprit)
            return $header_culprits;

        return $header_culprits[$header_culprit];       
    }

    public static function headerNameAction($header_name_action = null){

        $header_name_actions=[
            'ML' => 'Mesma linha',
            'LB' => 'Linha de baixo',      
        ];
        
        if(!$header_name_action)
            return $header_name_actions;

        return $header_name_actions[$header_name_action];       
    }
}
