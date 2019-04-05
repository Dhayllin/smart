<?php

use Illuminate\Database\Seeder;

class PersonTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person_types')->insert([
            [
                'id'            =>1, 
                'content'   =>'PF' 
            ],
            [
                'id'            =>2,
                'content'   =>'PJ' 
            ],      
        ]);
    }
}
