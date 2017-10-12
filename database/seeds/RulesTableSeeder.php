<?php

use Illuminate\Database\Seeder;

class RulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rule = new \App\Rules();
        $rule->name = 'Full contact';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'Semi contact';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'Light contact';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'International';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'Thai boxing';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'K-1';
        $rule->art_id = 1;
        $rule->save();

        $rule = new \App\Rules();
        $rule->name = 'Sanshou';
        $rule->art_id = 1;
        $rule->save();


        $rule = new \App\Rules();
        $rule->name = 'Shoot boxing';
        $rule->art_id = 1;
        $rule->save();

    }
}
