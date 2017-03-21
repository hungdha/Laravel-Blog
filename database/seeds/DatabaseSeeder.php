<?php
/**
// Make a seed
// php artisan make:seeder UsersTableSeed

// Make a migration
// php artisan make:migration create_users_table


*/
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $this->call(PostsTableSeed::class);     
        $this->call(RolesTableSeed::class);
        $this->call(UsersTableSeed::class);
        
        // Running Seeders
        // Once db 
        // php artisan db:seed --class=UsersTableSeeder
        // All run
        // php artisan migrate:refresh --seed

        
    
    }
}
