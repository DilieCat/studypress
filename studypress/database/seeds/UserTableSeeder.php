<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
 public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => str_random(5) . 'erf',
            'woonplaats' => str_random(5).'drecht',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '1234' . random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => str_random(5) . 'erf',
            'woonplaats' => str_random(5).'drecht',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '06'.random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => str_random(5) . 'erf',
            'woonplaats' => str_random(5).'drecht',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '06'.random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);
    }
}
