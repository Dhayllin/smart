<?php

use Illuminate\Database\Seeder;

class TypeAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_authors')->insert([
            [
                'id'            =>1,
               
            ],
            [
                'id'            =>2,  
            ],      
        ]);
    }
}
