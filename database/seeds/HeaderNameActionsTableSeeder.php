<?php

use Illuminate\Database\Seeder;

class HeaderNameActionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_name_actions')->insert([
            [
                'id'            =>1,
                'content'=>'linha de baixo'
               
            ],
            [
                'id'            =>2,  
                'content'=>'mesma linha'
            ],      
        ]);
    }
}


