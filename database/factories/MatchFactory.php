<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Week;
use App\Models\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {

    return [
        'title' => $faker->word,
        'description' => $faker->word,
        'title_ar' => $faker->word,
        'description_ar' => $faker->word,
        'image' => $faker->word,
        'video' => $faker->word,
        'week_id' => function () {
            return factory(Week::class)->create()->id;
        },
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
