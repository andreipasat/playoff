<?php

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
         $this->call(UsersTableSeeder::class);
         $this->call(ArtsTableSeeder::class);
         $this->call(RulesTableSeeder::class);
         $this->call(CountriesTableSeeder::class);
         $this->call(ClubsTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(CoachTableSeeder::class);
         $this->call(PlayerTableSeeder::class);

    }
}
