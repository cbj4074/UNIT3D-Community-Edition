<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Models\ChatStatus::class, function (Faker $faker) {
    return [
        'name'  => $faker->name,
        'color' => $faker->word,
        'icon'  => $faker->word,
    ];
});
