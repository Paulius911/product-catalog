<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i = 0; $i < 30; $i++) {
            $product = new Product();
            $product->name = $faker->unique()->sentence(1);
            $product->baseprice = $faker->randomFloat(2);
            $product->image = $faker->imageUrl(640, 480, 'technics');
            $product->description = $faker->paragraphs(3, true);
            $product->sku = $faker->unique()->numberBetween(1,30);

            $product->save();
        }
    }
}
