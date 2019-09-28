<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About();
        $about->item_id = 1;
        $about->user_id = 1;
        $about->text = "text by about item table";
        $about->save();




    }
}
