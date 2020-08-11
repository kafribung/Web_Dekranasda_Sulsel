<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->paragraph(300),
        'img'  => 'img_members/default_member.jpeg',
        'address' => $faker->address(),
        'contact' => '085331459400',
        'website' => 'https://shopee.co.id/tokoshopieshopie',
        'slug'    => \Str::slug($faker->name()),
        'user_id' => 1,
    ];
});
