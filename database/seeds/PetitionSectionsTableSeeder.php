<?php

use Illuminate\Database\Seeder;

class PetitionSectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petition_sections')->insert([
            [
                'id'            =>1,
                'title'=>'title sectio title sectio title sectio title sectio title sectio title sectio ',
                'description'=>'description descriptiondescription descriptiondescriptiondescription description',
                'active'=>1,
                'created_at'   => $now,
                'updated_at'    => $now,               
            ],    
        ]);
    }
}
