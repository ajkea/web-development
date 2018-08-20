<?php

use Faker\Generator as Faker;

$factory->define(App\Auction::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\User')->create()->id,
        'name' => $faker->name,
        'style' => $faker->colorName,
        'year' => $faker->year,
        'width' => $faker->randomNumber(4),
        'height' => $faker->randomNumber(4),
        'depth' => $faker->randomNumber(4),
        'description' => $faker->realText(300),
        'condition' => $faker->realText(100),
        'origin' => $faker->name,
        'min_price' => $faker->randomNumber(4),
        'max_price' => $faker->randomNumber(5),
        'buy_now' => $faker->randomNumber(5),
        'end_date' => $faker->dateTimeBetween('now', 1540857600),
    ];
});
