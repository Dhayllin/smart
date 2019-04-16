<?php

use Illuminate\Database\Seeder;

class TypesSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('type_sections')->insert([
            [
                'id'                 =>1,  
                'petition_type_id'   =>1, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>2,  
                'petition_type_id'   =>1, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>3,  
                'petition_type_id'   =>3, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>4,  
                'petition_type_id'   =>2, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>5,  
                'petition_type_id'   =>2, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>6,  
                'petition_type_id'   =>2, 
                'petition_section_id'=>4,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>7,  
                'petition_type_id'   =>3, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>8,  
                'petition_type_id'   =>3, 
                'petition_section_id'=>3,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>9,  
                'petition_type_id'   =>3, 
                'petition_section_id'=>3,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>10,  
                'petition_type_id'   =>4, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
             [
                'id'                 =>11,  
                'petition_type_id'   =>4, 
                'petition_section_id'=>4,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>12,  
                'petition_type_id'   =>4, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>13,  
                'petition_type_id'   =>5, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>14,  
                'petition_type_id'   =>5, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>15,  
                'petition_type_id'   =>5, 
                'petition_section_id'=>4,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>16,  
                'petition_type_id'   =>6, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>17,  
                'petition_type_id'   =>6, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>18,  
                'petition_type_id'   =>6, 
                'petition_section_id'=>3,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>19,  
                'petition_type_id'   =>7, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>20,  
                'petition_type_id'   =>8, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>21,  
                'petition_type_id'   =>8, 
                'petition_section_id'=>2,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>22,  
                'petition_type_id'   =>9, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
            [
                'id'                 =>23,  
                'petition_type_id'   =>10, 
                'petition_section_id'=>1,         
                'created_at'         => $now,
                'updated_at'         => $now,               
            ],
        ]);
    }
}
