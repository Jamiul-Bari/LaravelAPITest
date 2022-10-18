<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123123'),
        ]);


        for ($i = 0; $i < 200; $i++) {
            DB::table('posts')->insert([
                'title'     => $faker->words(5, true),
                'body'      => $faker->sentence(45),
                'category'  => rand(1, 5),
                'author'    => $faker->name(),
            ]);
        }
    }
}
