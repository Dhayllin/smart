<?php

use Illuminate\Database\Seeder;

class TopicRelacionamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('topic_relacionamentos')->insert([
            [
                'id'                    =>1,
                'subtopico'             =>'subtopico Organizar melhor a lógica subtópico.',
                'petition_demand_id'    =>1, 
                'petition_type_id'      =>1,
                'petition_section_id'   =>1,       
                'created_at'            => $now,
                'updated_at'            => $now,               
            ],    
        ]);
    }
}

