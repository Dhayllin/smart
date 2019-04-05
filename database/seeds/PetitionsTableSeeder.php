<?php

use Illuminate\Database\Seeder;

class PetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petitions')->insert([
            [
                'id'            =>1,
                'created_at'   => $now,
                'updated_at'    => $now,
               
            ],
            [
                'id'            =>2,              
                'created_at'   => $now,
                'updated_at'    => $now,
            ],      
        ]);
    }
}
