<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => '["1","2","3","4","5","6","7","8","9","10"]',
        'subcategory_id' =>'["1","2"]',
        'manufacturer_id' =>'["3"]',
        'product_name' => $faker->sentence(2),
        'product_sku' => $faker->sentence('4'),
        'product_status' => 1,
        'product_qty' =>$faker->numberBetween(100, 5000),
        'product_long_description' => $faker->sentence(50),
        'product_price' => $faker->numberBetween(100, 5000),
        'product_video_link' => 'https://www.youtube.com/embed/D604HtudFMM?list=RDD604HtudFMM',
        'product_image'=>'1.jpg',
        'product_image_1'=>'2.jpg',
        'product_image_2'=>'3.jpg',
        'product_image_3'=>'4.jpg',
        'product_image_4'=>'5.jpg',
        'is_featured' => 1,
        'is_latest' => 1,
        'created_by' => 1,
        'updated_by' => 1,

    ];
});
