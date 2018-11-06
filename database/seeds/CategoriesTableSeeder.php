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
        $category->name = '1-я наилегчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 30;
        $category->weight_to_kg = 33;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я наилегчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 33;
        $category->weight_to_kg = 36;
        $category->save();
        //---------


        $category = new \App\Categories();
        $category->name = '3-я наилегчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 36;
        $category->weight_to_kg = 39;
        $category->save();
        //---------


        $category = new \App\Categories();
        $category->name = '1-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 39;
        $category->weight_to_kg = 42;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 42;
        $category->weight_to_kg = 45;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полулегкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 45;
        $category->weight_to_kg = 48;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Легкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 48;
        $category->weight_to_kg = 51;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 51;
        $category->weight_to_kg = 54;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 54;
        $category->weight_to_kg = 57;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1 -я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 57;
        $category->weight_to_kg = 60;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2 -я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 60;
        $category->weight_to_kg = 63;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полутяжелая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 63;
        $category->weight_to_kg = 66;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1 -я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 66;
        $category->weight_to_kg = 70;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Супертяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 13;
        $category->age_to = 14;
        $category->weight_from_kg = 70;
        $category->weight_to_kg = 200;
        $category->save();
        //---------



        $category = new \App\Categories();
        $category->name = '2-я наилегчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 0;
        $category->weight_to_kg = 42;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '3-я наилегчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 42;
        $category->weight_to_kg = 45;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 45;
        $category->weight_to_kg = 48;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 48;
        $category->weight_to_kg = 51;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полулегкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 51;
        $category->weight_to_kg = 54;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Легкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 54;
        $category->weight_to_kg = 57;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 57;
        $category->weight_to_kg = 60;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 60;
        $category->weight_to_kg = 63.5;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 63.5;
        $category->weight_to_kg = 67;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 67;
        $category->weight_to_kg = 71;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полутяжелая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 71;
        $category->weight_to_kg = 75;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 75;
        $category->weight_to_kg = 81;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 15;
        $category->age_to = 16;
        $category->weight_from_kg = 81;
        $category->weight_to_kg = 200;
        $category->save();
        //---------




        $category = new \App\Categories();
        $category->name = '1-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 48;
        $category->weight_to_kg = 51;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 51;
        $category->weight_to_kg = 54;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полулегкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 54;
        $category->weight_to_kg = 57;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Легкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 57;
        $category->weight_to_kg = 60;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 60;
        $category->weight_to_kg = 63.5;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 63.5;
        $category->weight_to_kg = 67;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 67;
        $category->weight_to_kg = 71;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 71;
        $category->weight_to_kg = 75;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полутяжелая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 75;
        $category->weight_to_kg = 81;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 81;
        $category->weight_to_kg = 86;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 86;
        $category->weight_to_kg = 91;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Супертяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 17;
        $category->age_to = 18;
        $category->weight_from_kg = 91;
        $category->weight_to_kg = 200;
        $category->save();
        //---------



        $category = new \App\Categories();
        $category->name = '1-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 48;
        $category->weight_to_kg = 51;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я легчайшая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 51;
        $category->weight_to_kg = 54;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полулегкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 54;
        $category->weight_to_kg = 57;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Легкая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 57;
        $category->weight_to_kg = 60;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 60;
        $category->weight_to_kg = 63.5;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я полусредняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 63.5;
        $category->weight_to_kg = 67;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 67;
        $category->weight_to_kg = 71;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я средняя';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 71;
        $category->weight_to_kg = 75;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Полутяжелая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 75;
        $category->weight_to_kg = 81;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '1-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 81;
        $category->weight_to_kg = 86;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = '2-я тяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 86;
        $category->weight_to_kg = 91;
        $category->save();
        //---------

        $category = new \App\Categories();
        $category->name = 'Супертяжёлая';
        $category->sex = 'm';
        $category->age_name = 'Boys';
        $category->age_from = 19;
        $category->age_to = 50;
        $category->weight_from_kg = 91;
        $category->weight_to_kg = 200;
        $category->save();
        //---------




    }
}
