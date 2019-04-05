
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
                'header_address_id'       =>1,
                'header_author_id'        =>1,
                'header_culprit_id'       =>1,                
                'header_name_action_id'   =>1,
                'header_num_processo_id'  =>1,                
            ],
            [
                'id'                    =>2,
                'header_address_id'       =>1,
                'header_author_id'        =>1,
                'header_culprit_id'       =>2,                
                'header_name_action_id'   =>2,
                'header_num_processo_id'  =>1,      
            ],      
        ]);
    }
}
