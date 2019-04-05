<?php

use Illuminate\Database\Seeder;

class TypeAddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_addresses')->insert([
            [
                'id'            =>1,
               
            ],
            [
                'id'            =>2,  
            ],      
        ]);
    }
}
