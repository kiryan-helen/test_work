<?php

use Illuminate\Database\Seeder;

class table_areas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($number = 0; $number <= 15; $number++){
            DB::table('areas')->insert([
                'title' => 'area '.$number,
                'city_id' => rand(1,5)
            ]);
        }
    }
}
