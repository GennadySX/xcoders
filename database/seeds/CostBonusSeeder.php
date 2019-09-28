<?php

use Illuminate\Database\Seeder;
use App\CostBonus;
class CostBonusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bonus = new CostBonus();
        $bonus->card_id =  1;
        $bonus->value = "152";
        $bonus->save();

    }
}
