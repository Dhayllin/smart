<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");
        DB::table('users')->insert([
            [
                'id'            =>1,
                'name'          => 'Tiago Marinho',
                'email'         => 'tiago.marinho@w3interativa.com.br',                                
                'password'      => bcrypt('w3123456'),           
                'remember_token'=> str_random(10),              
                "created_at"    => $now,
                "updated_at"    => $now,
            ],
            [
                'id'            =>2,
                'name'          => 'Dhayllin Jesus',
                'email'         => 'dhayllin@hotmail.com',
                'password'      => bcrypt('w3123456'),                   
                'remember_token'=> str_random(10),
                "created_at"    => $now,
                "updated_at"    => $now,
            ],      
        ]);
    }
}
