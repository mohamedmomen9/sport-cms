<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Week;
use App\Models\Season;
use Faker\Generator as Faker;

$factory->define(Week::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'week_num' => $faker->randomDigitNotNull,
        'season_id' => function () {
            return factory(Season::class)->create()->id;
        },
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
