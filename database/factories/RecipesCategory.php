<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;

use App\Models\RecipesCategory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(RecipesCategory::class, function (Faker $faker) {
    $name = $faker->text(15);

    return [
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'seo_title' => $faker->text(15),
        'seo_description' => $faker->text(15),
        'seo_keywords' => $faker->text(15),
    ];
});
