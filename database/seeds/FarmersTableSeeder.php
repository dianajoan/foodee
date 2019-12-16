<?php

use Illuminate\Database\Seeder;
use App\Models\Farmer;

class FarmersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $farmer = new Farmer();
        $farmer->name = 'Mr. Timothy Williams';
        $farmer->type = 'I grow vegetable products';
        $farmer->save();

        $farmer = new Farmer();
        $farmer->name = 'Ms Ruth Williams';
        $farmer->type = 'Fruity';
        $farmer->bio = 'I grow Fruit products';
        $farmer->save();

        $farmer = new Farmer();
        $farmer->name = 'Mr. Kenneth Mcdorn';
        $farmer->type = 'Juicy';
        $farmer->bio = 'I grow Juicy products';
        $farmer->save();

        $farmer = new Farmer();
        $farmer->name = 'Ms Babra Mcdon';
        $farmer->type = 'Dried';
        $farmer->bio = 'I grow dried products';
        $farmer->save();

    }
}
