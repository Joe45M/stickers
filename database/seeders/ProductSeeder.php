<?php

namespace Database\Seeders;

use Faker\Provider\PhoneNumber;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i <= 10; $i++) {
            $product = new \App\Models\Product();
            $product->name = $faker->name() . ' sticker';
            $product->description = $faker->sentence(100);
            $product->price = $faker->biasedNumberBetween(100, 1000);
            $product->save();
        }
    }
}
