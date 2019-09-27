<?php

use Illuminate\Database\Seeder;

class Equipment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipment')->insert([
            'name' => 'Вишка М1',
            'region_id' => '1',
            'status' => '1'
        ]);
        DB::table('equipment')->insert([
            'name' => 'Вишка Sn-R 525',
            'region_id' => '5',
            'status' => '1'
        ]);
        DB::table('equipment')->insert([
            'name' => 'Вишка Sn-R 325',
            'region_id' => '2',
            'status' => '1'
        ]);
        DB::table('equipment')->insert([
            'name' => 'Вишка Tp-link Sonar',
            'region_id' => '3',
            'status' => '1'
        ]);
        DB::table('equipment')->insert([
            'name' => 'Вишка TP-Link Sonar real',
            'region_id' => '7',
            'status' => '1'
        ]);
        DB::table('equipment')->insert([
            'name' => 'Вишка Huaweii Expo-Sync',
            'region_id' => '4',
            'status' => '1'
        ]);
    }
}
