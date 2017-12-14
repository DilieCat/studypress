<?php

use Illuminate\Database\Seeder;

class KlasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('klas')->insert([ 
            'name' => str_random(10), 
            'opleiding_id' => random_int(1, 200), 
        ]);

            DB::table('klas')->insert([ 
            'name' => str_random(10), 
            'opleiding_id' => random_int(1, 200), 
        ]);

            DB::table('klas')->insert([ 
            'name' => str_random(10), 
            'opleiding_id' => random_int(1, 200), 
        ]);

            DB::table('klas')->insert([ 
            'name' => str_random(10), 
            'opleiding_id' => random_int(1, 200), 
        ]);
    }
}
