<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('contacts')->insert([
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
