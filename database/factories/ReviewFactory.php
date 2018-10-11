<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(App\Review::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1,50),
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5),
    ];
});
