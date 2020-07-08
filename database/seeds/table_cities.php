<?php

use Illuminate\Database\Seeder;

class table_cities extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($number = 0; $number <= 5; $number++){
            DB::table('cities')->insert([
                'title' => 'city '.$number
            ]);
        }
    }
}
