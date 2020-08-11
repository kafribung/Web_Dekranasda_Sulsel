<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'name'  => $faker->sentence(),
        'description' => $faker->paragraph(100),
        'img' => 'img_blogs/default_blog.jpg',
        'slug' => \Str::slug($faker->sentence()),
        'user_id' => 1
    ];
});
