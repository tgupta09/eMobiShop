<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $faker = Factory::create();

        DB::table('userdata')->insert([
            'username' => $faker->userName,
            'email' => $faker->safeEmail,
            'password' => Hash::make('123456789'),
            'github_id' => $faker->name,
            'gmail_id' => $faker->name,
            'avatar' => $faker->url,
        ]);
    }
}
