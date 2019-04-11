<?php

use Illuminate\Database\Seeder;

class PetitionDemandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petition_demands')->insert([
            [
                'id'            =>1,
                'title'=>'obrigação de fazer',
                'content' =>'impor multa  diária ao réu',  
                'active' =>0,
                'created_at'   => $now,
                'updated_at'    => $now,
               
            ],
            [
                'id'            =>2,
                'title'=>'lorem ipson',
                'content' =>'lorem ipson',  
                'active' =>1,
                'created_at'   => $now,
                'updated_at'    => $now,
            ], 
            [
                'id'            =>3,
                'title'=>'obrigação de fazer',
                'content' =>'impor multa  diária ao réu',  
                'active' =>0,
                'created_at'   => $now,
                'updated_at'    => $now,
            ],  
            [
                'id'            =>4,
                'title'=>'lorem ipson',
                'content' =>'lorem lorem ipson',  
                'active' =>1,
                'created_at'   => $now,
                'updated_at'    => $now,
            ],       
        ]);
    }
}
