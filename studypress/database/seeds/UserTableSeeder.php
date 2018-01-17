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
            'name' => 'Henk',
            'email' => 'henk@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => 'Straat-erf',
            'woonplaats' => 'Dordrecht',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '06' . random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);

        DB::table('users')->insert([
            'name' => 'Freek',
            'email' => 'freek@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => 'Brand-erf',
            'woonplaats' => 'Rotterdam',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '06'.random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);

        DB::table('users')->insert([
            'name' => 'Kees',
            'email' => 'kees@gmail.com',
            'password' => bcrypt('secret'),
            'adres' => 'Kasia-erf',
            'woonplaats' => 'Papendrecht',
            'ov_nummer' => random_int(1, 50),
            'telnummer' => '06'.random_int(10000000, 99999999), 
            'cohort' => str_random(5),
            'klas_id' => random_int(1, 5),
            'opleiding_id' => random_int(1, 5),

        ]);
    }
}
