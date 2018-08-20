<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'question' => $faker->sentence(4),
        'answer' => $faker->sentence(12),
    ];
});
