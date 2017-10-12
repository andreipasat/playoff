<?php

use Illuminate\Database\Seeder;

class ArtsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $art = new \App\Arts();
        $art->name = 'Kickboxing';
        $art->save();
    }
}
