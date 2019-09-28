<?php

use Illuminate\Database\Seeder;
use App\Prop_About;
class PropAboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prop = new Prop_About();
        $prop->about_id = 1;
        $prop->value = "path not found";
        $prop->save();
    }
}
