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
                'title'=>'title sectio1',
                'description'=>'description sectio1',
                'active'=>1,
                'created_at'   => $now,
                'updated_at'    => $now,               
            ],  
            [
                'id'            =>2,
                'title'=>'title sectio2',
                'description'=>'description sectio2',
                'active'=>0,
                'created_at'   => $now,
                'updated_at'    => $now,               
            ],   
            [
                'id'            =>3,
                'title'=>'title sectio3',
                'description'=>'description sectio3',
                'active'=>1,
                'created_at'   => $now,
                'updated_at'    => $now,               
            ],   
            [
                'id'            =>4,
                'title'=>'title sectio4',
                'description'=>'description sectio4',
                'active'=>0,
                'created_at'   => $now,
                'updated_at'    => $now,               
            ],  
        ]);
    }
}
