<?php

use Illuminate\Database\Seeder;



class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        for($i = 1; $i <= 200; $i++){
            
            DB::table("restaurants")->insert([
            'name' => 'レストラン'.$i,
            "prefecture_id" => mt_rand(1,47),
            "user_id" => "1",
            "phoneNumber"=> $faker->phoneNumber(),
            "email"=> $faker->freeEmail(),
            "address"=> "123-4567 ○○県 ○○市 ○○区 7-8-9",
                ]);
            
            
           
        }
    }
}
