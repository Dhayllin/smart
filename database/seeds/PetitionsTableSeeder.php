<?php

use Illuminate\Database\Seeder;

class PetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petitions')->insert([
            [
                'id'                    =>1,
                'title'                 =>'MERITÍSSIMO JUÍZO DA VARA CÍVEL DA COMARCA DE CUIABÁ-MT',
                'content'               =>'Cuiabá/MT, CEP 78.056-853, por seus procuradores in fine',                                            
                'petition_section_id'   =>1,
                'petition_type_id'      =>1,
                'petition_demand_id'    =>1,               
                'topic_id'              =>1,
                'client_id'             =>1,              
                'culprit_id'            =>1,
                'created_at'            => $now,
                'updated_at'            => $now,
               
            ],   
        ]);
    }
}
