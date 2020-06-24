<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = new \App\City();
        $city->id = 1;
        $city->name = 'Hà Nội';
        $city->save();

        $city = new \App\City();
        $city->id = 2;
        $city->name = 'Hồ Chí Minh';
        $city->save();

        $city = new \App\City();
        $city->id = 3;
        $city->name = 'Hải Phong';
        $city->save();

    }
}
