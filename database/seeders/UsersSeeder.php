<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'John',
           'email' => 'john@mail.ru',
           'is_admin' => 1,
           'password' => '1111',
        ]);
        DB::table('users')->insert([
            'name' => 'Jack',
            'email' => 'Jack@mail.ru',
            'is_moderator' => 1,
            'password' => '2222',
        ]);
        DB::table('users')->insert([
            'name' => 'Mery',
            'email' => 'mery@mail.ru',
            'password' => '333',
        ]);
    }
}
