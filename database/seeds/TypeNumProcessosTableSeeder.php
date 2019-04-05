<?php

use Illuminate\Database\Seeder;

class TypeNumProcessosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_num_processos')->insert([
            [
                'id'            =>1,
               
            ],
            [
                'id'            =>2,  
            ],      
        ]);
    }
}
