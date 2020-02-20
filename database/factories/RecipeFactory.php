<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'category_id' => rand(1, 10),
        'description' => $faker->text(500),
        'seo_title' => $faker->text(15),
        'seo_description' => $faker->text(15),
        'seo_keywords' => $faker->text(15),
    ];
});
