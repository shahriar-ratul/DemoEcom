<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' =>json_encode([$faker->numberBetween(1,10)]),
        'subcategory_id' =>json_encode([$faker->numberBetween(1,4)]),
        'manufacturer_id' =>json_encode([$faker->numberBetween(1,10)]),
        'product_name' => $faker->sentence(2),
        'product_image' => 'default.jpg',
        'product_sku' => $faker->sentence('4'),
        'product_status' => 1,
        'product_qty' =>$faker->numberBetween(100, 5000),
        'product_long_description' => $faker->sentence(20),
        'product_price' => $faker->numberBetween(100, 5000),
        'is_featured' => 1,
        'is_latest' => 1,
        'created_by' => 1,
        'updated_by' => 1,

    ];
});
