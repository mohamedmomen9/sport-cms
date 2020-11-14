<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Season;
use Faker\Generator as Faker;

$factory->define(Season::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'year' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
