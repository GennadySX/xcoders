<?php

use Illuminate\Database\Seeder;

class Shops extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([
            'name' => 'Yota Afimol',
            'address' => 'Москва',
            'good_count' => '352'
        ]);
        DB::table('shops')->insert([
            'name' => 'Yota Park-Pobedy',
            'address' => 'Москва',
            'good_count' => '125'
        ]);
        DB::table('shops')->insert([
            'name' => 'Yota Kaltso',
            'address' => 'Казань',
            'good_count' => '785'
        ]);


    }
}
