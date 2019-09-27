<?php

use Illuminate\Database\Seeder;
use Expert\User;

class DummyDataUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    

    public function run()
    {
        //
        for($i=0; $i<10; $i++) {
        	$faker = Faker\Factory::create();
            DB::table('users')->insert([
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $faker->password,
           	'created_at'=>$faker->dateTime(),
           	'updated_at'=>$faker->dateTime('now')
        	]);
        }
 }
}
