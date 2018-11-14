<?php

use Illuminate\Database\Seeder;

class CoachTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coach = new \App\Coach();
        $coach->name = 'Viorel Gurdis';
        $coach->club_id = 1;
        $coach->save();

        $coach = new \App\Coach();
        $coach->name = 'Nicolae Caraus';
        $coach->club_id = 3;
        $coach->save();

        $coach = new \App\Coach();
        $coach->name = 'Belinschi Vladislav';
        $coach->club_id = 4;
        $coach->save();

    }
}
