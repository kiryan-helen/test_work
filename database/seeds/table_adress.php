<?php

use Illuminate\Database\Seeder;

class table_adress extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($number = 0; $number <= 5; $number++){
            DB::table('adress')->insert([
                'name' => "name ".$number,
                'city_id' => rand(1,5),
                'area_id' => rand(1,5),
                'street' => "street ".$number,
                'house' => "house ".$number,
                'additional_information' => str_random(10)
            ]);
        }
    }
}
