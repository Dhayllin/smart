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
                'header_address'        =>'identificar a vara',
                'header_num_process'    => 'Sim',
                'header_author'         =>'Qualificação completa',
                'header_culprit'        =>'Qualificação completa',
                'header_name_action'    =>'Linha de baixo',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ],    
            [
                'id'                    =>2,
                'title'                 =>'Título Tipo2',
                'petition_section_id'   =>1,
                'header_address'        =>'Não identificar a vara',
                'header_num_process'    =>"Não",
                'header_author'         =>'Já qualificado',
                'header_culprit'        =>'Já qualificado',
                'header_name_action'    =>'Mesma linha',
                'active'                => 0,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ], 
            [
                'id'                    =>3,
                'title'                 =>'Título Tipo3',
                'petition_section_id'   =>1,
                'header_address'        =>'Identificar a vara',
                'header_num_process'    =>'Sim',
                'header_author'         =>'Qualificação completa',
                'header_culprit'        =>'Já qualificado',
                'header_name_action'    =>'Mesma linha',
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ], 
            [
                'id'                    =>4,
                'title'                 =>'Título Tipo3',
                'petition_section_id'   =>1,
                'header_address'        =>'Não identificar a vara',
                'header_num_process'    =>'Não',
                'header_author'         =>'Já qualificado',
                'header_culprit'        =>'Qualificação completa',
                'header_name_action'    =>'Linha de baixo',
                'active'                =>0,   
                'created_at'            => $now,
                'updated_at'            => $now,
            ],            
        ]);
    }
}
