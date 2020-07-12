<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubCategory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'category_id' => \Illuminate\Support\Str::random(1),
        'name' => $faker->name,
        'status' => 1,


    ];
});
