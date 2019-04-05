<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('topics')->insert([
            [
                'id'            =>1, 
                'text' =>'text text text', 
                'title' =>'title title', 
                'topic_relacionamento_id' =>1, 
                'created_at'   => $now,
                'updated_at'    => $now,
            ],  
        ]);
    }
}
