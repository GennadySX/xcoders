<?php

use Illuminate\Database\Seeder;

class Tariffs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tariff')->insert([
            'name' => 'Мой онлайнX ',
            'cost' => '390',
            'desc' => 'безлимит на Yota России 600 мин. на остальные номера России и +20 ГБ интернета ',
            'from_public' => '2019-03-05',
            'to_public' => '2019-12-02'
        ]);
        DB::table('tariff')->insert([
            'name' => 'Мой онлайн ',
            'cost' => '290',
            'desc' => 'безлимит на Yota России 400 мин. на другие мобильные номера домашнего региона и +15 ГБ интернета',
            'from_public' => '2019-03-05',
            'to_public' => '2019-12-02'
        ]);
        DB::table('tariff')->insert([
            'name' => 'Мой разговор ',
            'cost' => '190',
            'desc' => 'безлимит на Yota России 300 мин. на остальные номера России и +3 ГБ интернета ',
            'from_public' => '2019-03-05',
            'to_public' => '2019-12-02'
        ]);
        DB::table('tariff')->insert([
            'name' => 'Space Xs ',
            'cost' => '290',
            'desc' => 'безлимит на Yota России 400 мин. на остальные номера России и +50 ГБ интернета ',
            'from_public' => '2019-03-05',
            'to_public' => '2019-12-02'
        ]);
    }
}
