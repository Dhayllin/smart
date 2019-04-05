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
            ],
            [
                'id'            =>2,
            ],      
        ]);
    }
}
