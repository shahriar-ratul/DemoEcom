<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Manufacturer;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'status' => 1,
    ];
});
