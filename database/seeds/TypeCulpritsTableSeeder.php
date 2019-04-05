<?php

use Illuminate\Database\Seeder;

class TypeCulpritsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('culprits')->insert([
            [
                'id'            =>1,
               
            ],
            [
                'id'            =>2,  
            ],      
        ]);
    }
}
