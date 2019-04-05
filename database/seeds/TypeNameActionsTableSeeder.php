<?php

use Illuminate\Database\Seeder;

class TypeNameActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_name_actions')->insert([
            [
                'id'            =>1,
               
            ],
            [
                'id'            =>2,  
            ],      
        ]);
    }
}
