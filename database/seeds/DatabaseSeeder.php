<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HeaderAddressesTableSeeder::class);
        $this->call(HeaderAuthorsTableSeeder::class);  
        $this->call(HeaderCulpritsTableSeeder::class); 
        $this->call(HeaderNameActionsTableSeeder::class);
        $this->call(HeaderNumProcessosTableSeeder::class);     
        $this->call(TypeHeadersTableSeeder::class);             
        $this->call(ContactsTableSeeder::class);       
        $this->call(PersonTypesTableSeeder::class);
        $this->call(PetitionDemandsTableSeeder::class);
        $this->call(PetitionSectionsTableSeeder::class);       
        $this->call(PetitionTypesTableSeeder::class);
        $this->call(TopicRelacionamentosTableSeeder::class);    
        $this->call(ClientsTableSeeder::class);
        $this->call(CulpritsTableSeeder::class);
        $this->call(TopicsTableSeeder::class);
        $this->call(PetitionsTableSeeder::class);
             
    }
}
