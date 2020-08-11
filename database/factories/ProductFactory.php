<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(100),
        'price'  => 150000,
        'address'  => $faker->address(),
        'slug' => \Str::slug($faker->sentence()),
        'product_category_id' => rand(1, 7),
        'member_id' => rand(1, 10),
        'user_id' => 1,
    ];
});
