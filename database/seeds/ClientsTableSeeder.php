<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('clients')->insert([
            [
                'id'                =>1,
                'name'              =>'EDUARDO CESAR ALVES LEMES,',
                'password'          =>'654321',
                'cpf'               =>'045.600.795-44',
                'rg'                =>'1388339668',
                'orgao_emissor'     =>'SSP/BA',
                'nacionalidade'     =>'brasileiro,',
                'estado_civil'      =>'solteiro',
                'profissao'         =>'autônomo',          
                'plano'=>1,
               // 'responsavel_id'=>1,    user_id       
                'contact_id'        =>1,             
                'person_type_id'    =>1,            
                'active'            =>1,             
                'created_at'        => $now,
                'updated_at'        => $now,
               
            ],
        ]);
    }
}
