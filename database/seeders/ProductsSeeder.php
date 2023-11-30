<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        $product = new Products();
        $product->Name = $faker->word;
        $product->Quantity = (string)$faker->randomNumber(3);
        $product->Price = (string)$faker->randomFloat(2, 10, 100); 
        $product->save();
    }
}
