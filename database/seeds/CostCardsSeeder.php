<?php

use App\CostCard;
use Illuminate\Database\Seeder;

class CostCardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $card = new CostCard();
        $card->cost = "1522";
        $card->description = 'description by costcard';
        $card->item_id = 1;
        $card->save();
    }
}
