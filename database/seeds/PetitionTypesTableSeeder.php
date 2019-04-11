<?php

use Illuminate\Database\Seeder;

class PetitionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petition_types')->insert([
            [
                'id'                    =>1,
                'title'                 =>'Título Tipo1',
                'petition_section_id'   =>1,
                'header_address'        =>'IV',
                'header_num_process'    =>1,
                'header_author'         =>'QC',
                'header_culprit'        =>'QC',
                'header_name_action'    =>'LB',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ],    
            [
                'id'                    =>2,
                'title'                 =>'Título Tipo2',
                'petition_section_id'   =>1,
                'header_address'        =>'NV',
                'header_num_process'    =>0,
                'header_author'         =>'JQ',
                'header_culprit'        =>'JQ',
                'header_name_action'    =>'ML',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ], 
            [
                'id'                    =>3,
                'title'                 =>'Título Tipo3',
                'petition_section_id'   =>1,
                'header_address'        =>'IV',
                'header_num_process'    =>1,
                'header_author'         =>'QC',
                'header_culprit'        =>'JQ',
                'header_name_action'    =>'ML',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ], 
            [
                'id'                    =>4,
                'title'                 =>'Título Tipo3',
                'petition_section_id'   =>1,
                'header_address'        =>'NV',
                'header_num_process'    =>1,
                'header_author'         =>'JQ',
                'header_culprit'        =>'QC',
                'header_name_action'    =>'LB',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ],            
        ]);
    }
}
