<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new \App\Countries();
        $country->name = 'R.Moldova';
        $country->prefix = 'md';
        $country->save();

        $country = new \App\Countries();
        $country->name = 'Romania';
        $country->prefix = 'ro';
        $country->save();
    }
}
