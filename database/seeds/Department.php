<?php

use Illuminate\Database\Seeder;

class Department extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert([
            'name' => 'Главный офис',
            'region_id' => '5'
        ]);
        DB::table('department')->insert([
            'name' => 'Отдел москва',
            'region_id' => '1'
        ]);

        DB::table('department')->insert([
            'name' => 'Отдел Казань',
            'region_id' => '5'
        ]);
    }
}
