
<?php

use Illuminate\Database\Seeder;

class TypeHeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_headers')->insert([
            [
                'id'                    =>1,
                'type_address_id'       =>1,
                'type_author_id'        =>1,
                'type_culprit_id'       =>1,                
                'type_name_action_id'   =>1,
                'type_num_processo_id'  =>1,                
            ],
            [
                'id'                    =>2,
                'type_address_id'       =>1,
                'type_author_id'        =>1,
                'type_culprit_id'       =>2,                
                'type_name_action_id'   =>2,
                'type_num_processo_id'  =>1,      
            ],      
        ]);
    }
}
