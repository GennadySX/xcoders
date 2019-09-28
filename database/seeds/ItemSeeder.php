<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Item;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = new Factory();

        $item = new Item();
        $item->name = "Помогите пожалуйста, деньги за сиги";
        $item->user_id = 1;
        $item->region_id = 1;
        $item->achieve_cost = '150000';
        $item->img = 'default.jpg';
        $item->goal = "120";
        $item->deadline = "2012-09-05 22:33";
        $item->save();

    }
}
