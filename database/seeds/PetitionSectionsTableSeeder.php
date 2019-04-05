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
     'do_direito'=>'a) DA APLICAÇÃO DO CÓDIGO DE DEFESA DO CONSUMIDOR',
     'dos_pedidos' =>'Pelo exposto, requer que V. Exa que se digne a:
                    a) conceder o benefício da justiça gratuita, nos termos
                    do art. 98 e 99, NCPC;',
               
     'dos_fatos' =>'O  autor estava desempregado e conheceu a ré em
                    exposição de novos negócios para autônomos ',
                'created_at'   => $now,
                'updated_at'    => $now,               
                ],    
        ]);
    }
}
