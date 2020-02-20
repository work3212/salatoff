<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Blog;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Blog::class, function (Faker $faker) {

    $name = $faker->text(50);

    return [
        'name' => $name,
        'slug' => Str::slug($name,'-'),
        'anons' => $faker->text(250),
        'description' => $faker->text(500),
        'seo_title' => $faker->text(15),
        'seo_description' => $faker->text(15),
        'seo_keywords' => $faker->text(15),

    ];
});
