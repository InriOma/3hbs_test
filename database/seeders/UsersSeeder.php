<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'=>'admin',
            'email'=> 'admin@3hbs.com',
            'password'=> bcrypt('12345678'),
        ]);

        User::create([
            'name'=>'Operations',
            'email'=> 'operarions@3hbs.com',
            'password'=> bcrypt('12345678'),
        ]);
    }
}