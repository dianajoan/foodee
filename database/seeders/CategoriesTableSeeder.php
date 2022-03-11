<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $category = new Category();
        $category->name = 'Vegetable';
        $category->type = 'vege';
        $category->display_name = 'Vegetables';
        $category->description = 'These are Vege Organic Products';
        $category->save();

        $category = new Category();
        $category->name = 'Fruits';
        $category->type = 'fruity';
        $category->display_name = 'Fruits';
        $category->description = 'These are Fruity Organic Products';
        $category->save();

        $category = new Category();
        $category->name = 'Juice';
        $category->type = 'juicy';
        $category->display_name = 'Juice';
        $category->description = 'These are Juicy Organic Products';
        $category->save();

        $category = new Category();
        $category->name = 'Dried';
        $category->type = 'dried';
        $category->display_name = 'Dried';
        $category->description = 'These are Dried Organic Products';
        $category->save();

    }
}
