<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'samuray';
        $user->email = 'samuray@mail.com';
        $user->password = bcrypt('qazwsx');
        $user->save();
    }
}
