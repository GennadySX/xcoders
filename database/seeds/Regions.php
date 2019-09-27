<?php

use Illuminate\Database\Seeder;

class Regions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'Москва',
            'count_abonents' => '190'
        ]);
        DB::table('regions')->insert([
            'name' => 'Казань',
            'count_abonents' => '11290'
        ]);
        DB::table('regions')->insert([
            'name' => 'Санкт-Петербург',
            'count_abonents' => '51590'
        ]);
        DB::table('regions')->insert([
            'name' => 'Екатирбург',
            'count_abonents' => '190'
        ]);
        DB::table('regions')->insert([
            'name' => 'Томск',
            'count_abonents' => '9580'
        ]);
        DB::table('regions')->insert([
            'name' => 'Сочи',
            'count_abonents' => '78500'
        ]);
        DB::table('regions')->insert([
            'name' => 'Нижний-Новгород',
            'count_abonents' => '15790'
        ]);
    }
}
