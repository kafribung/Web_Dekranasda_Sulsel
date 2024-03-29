<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Activity;
use Faker\Generator as Faker;

$factory->define(Activity::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(100),
        'img'  => 'img_activities/default_activity.jpeg',
        'tgl'  => now(),
        'slug' => \Str::slug($faker->sentence()),
        'user_id' => 1,
    ];
});
