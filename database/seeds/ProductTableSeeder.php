<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $product = new Product();
        $product->name = 'Bell pepper';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/tZy7S43/product-1.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Strawberry';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/DpHkqPQ/product-2.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Green Beans';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/P4XCC64/product-3.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Purple Cabbage';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/dWrWqTL/product-4.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Tomato';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/sP0ZVnC/product-5.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Brocolli';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/K6Fyqjt/product-6.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Carrots';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/JBtfqMX/product-7.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Fruit Juice';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/QkjpBjY/product-8.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Onion';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/1m7WdXg/product-9.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Apple';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/x631vc0/product-10.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Galic';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/xXdwP5z/product-11.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();

        $product = new Product();
        $product->name = 'Chili';
        $product->description = 'This is an Organic food.';
        $product->imagePath = 'https://i.ibb.co/qshYhrM/product-12.jpg';
        $product->previous_price = 120.00;
        $product->current_price = 80.00;
        $product->status = 'In Stock';
        $product->save();
    }
}
