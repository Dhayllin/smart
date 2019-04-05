<?php

use Illuminate\Database\Seeder;

class HeaderNumProcessosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_num_processos')->insert([
            [
                'id'     =>1,
                'content'=>'identificar a vara',

               
            ],
            [
                'id'     =>2,  
                'content'=>'não identificar a vara',
            ],    
        ]);
    }
}
