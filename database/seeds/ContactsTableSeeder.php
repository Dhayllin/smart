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
                'cep'           =>'78.056-853',
                'endereco'      =>'Avenida A, casa 15, Q-34, Condomínio Residencial Montenegro',
                'telefone'      =>'98777-76687',
                'email'         =>'email@hotmail.com',
                'bairro'        =>'Parque das Nações',
                'cidade'        =>'Cuiabá',
                'estado'        =>'MT',
                'created_at'    => $now,
                'updated_at'    => $now,
            ],
            [
                'id'            =>2,
                'cep'           =>'38400-69',
                'endereco'      =>'Rua Floriano Peixoto, n° 1713, loja 41',
                'telefone'      =>'640934-984523',
                'email'         =>'reu@hotmail.com',
                'bairro'        =>'Nossa Senhora Aparecida',
                'cidade'        =>'Uberlândia',
                'estado'        =>'MG',
                'created_at'    => $now,
                'updated_at'    => $now,
            ]
        ]);
    }
}
