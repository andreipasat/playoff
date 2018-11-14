<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PlayerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $player = new \App\Players();
            $player->name = 'Vasea nr ' . $i;
            $player->sex = 'm';
            $randYear = rand(1996,2013);
            $player->birthday = Carbon::createFromFormat('d/m/Y', '1/01/'.$randYear)->format('Y-m-d');
            $player->age = Carbon::createFromFormat('d/m/Y', '1/01/'.$randYear)->age;
            $player->weight = rand(60,100);
            $player->club_id = 1;
            $player->coach_id = 1;
            $player->wins = rand(0,20);
            $player->loses = rand(0,5);
            $player->equality = rand(0,3);
            $player->save();

        }

        for ($i = 0; $i < 50; $i++) {
            $player = new \App\Players();
            $player->name = 'Marusea nr ' . $i;
            $player->sex = 'm';
            $randYear = rand(1996,2013);
            $player->birthday = Carbon::createFromFormat('d/m/Y', '1/01/'.$randYear)->format('Y-m-d');
            $player->age = Carbon::createFromFormat('d/m/Y', '1/01/'.$randYear)->age;
            $player->weight = rand(40,60);
            $player->club_id = 1;
            $player->coach_id = 1;
            $player->wins = rand(0,20);
            $player->loses = rand(0,5);
            $player->equality = rand(0,3);
            $player->save();

        }
    }
}
