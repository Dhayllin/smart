<?php

use Illuminate\Database\Seeder;

class PetitionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('petition_types')->insert([
            [
                'id'                    =>1,
                'title'                 =>'Título Título Título  Título',
                'petition_section_id'   =>1,
                'active'                =>1,   
                'created_at'            => $now,
                'updated_at'            => $now,
               
            ],               
        ]);
    }
}
