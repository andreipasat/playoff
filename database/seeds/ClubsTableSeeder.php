<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $club = new \App\Clubs();
        $club->name = 'Gladiator';
        $club->country_id = 1;
        $club->save();

        $club = new \App\Clubs();
        $club->name = 'Lion';
        $club->country_id = 1;
        $club->save();

        $club = new \App\Clubs();
        $club->name = 'Bercut';
        $club->country_id = 1;
        $club->save();

        $club = new \App\Clubs();
        $club->name = 'Thaiboxing club';
        $club->country_id = 1;
        $club->save();
    }
}
