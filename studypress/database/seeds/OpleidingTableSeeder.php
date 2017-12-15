<?php

use Illuminate\Database\Seeder;

class OpleidingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               DB::table('opleiding')->insert([
            'name' => str_random(10),
            'crebo' => random_int(1, 200),
            'niveau' => random_int(1, 4),

        ]);


               DB::table('opleiding')->insert([
            'name' => str_random(10),
            'crebo' => random_int(1, 200),
            'niveau' => random_int(1, 4),

        ]);


               DB::table('opleiding')->insert([
            'name' => str_random(10),
            'crebo' => random_int(1, 200),
            'niveau' => random_int(1, 4),

        ]);


               DB::table('opleiding')->insert([
            'name' => str_random(10),
            'crebo' => random_int(1, 200),
            'niveau' => random_int(1, 4),

        ]);
    }
}
