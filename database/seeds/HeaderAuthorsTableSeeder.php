<?php

use Illuminate\Database\Seeder;

class HeaderAuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header_authors')->insert([
            [
                'id'     =>1,
                'content'=>'qualificação completa'
            ],
            [
                'id'     =>2,  
                'content'=>'já qualificado'
            ],      
        ]);
    }
}


