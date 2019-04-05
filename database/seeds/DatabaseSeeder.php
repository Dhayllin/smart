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
        $this->call(TypeAddressesTableSeeder::class);
        $this->call(TypeAuthorsTableSeeder::class);  
        $this->call(TypeCulpritsTableSeeder::class);      
        $this->call(TypeHeadersTableSeeder::class);        
        $this->call(TypeNameActionsTableSeeder::class);
        $this->call(TypeNumProcessosTableSeeder::class);            
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
