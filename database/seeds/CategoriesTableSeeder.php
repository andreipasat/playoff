<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Categories();
        $category->name = '1st lightest';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 30;
        $category->weight_to_kg = 33;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2nd lightest';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 33;
        $category->weight_to_kg = 36;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2nd lightest';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = null;
        $category->weight_to_kg = 42;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '3rd lightest';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 36;
        $category->weight_to_kg = 39;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '3rd lightest';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 42;
        $category->weight_to_kg = 45;
        $category->save();
        //---------
    }
}
