<?php

use Illuminate\Database\Seeder;

class CulpritsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('culprits')->insert([
            [
                'id'            =>1,
                'name'          =>'ICE CREAM',
                'contact_id'    =>2,                
                'cnpj'          =>'10.409.455/0001-19',
                'razao_social'  =>'MULTIVISI COMERCIO E IMPORTACAO EIRELI ME',
                'person_type_id'=>2,
                'active'        =>1,
                'created_at'    => $now,
                'updated_at'    => $now,               
            ],    
        ]);
    }
}
